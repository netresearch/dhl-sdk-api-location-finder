<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service;

use Dhl\Sdk\LocationFinder\Api\LocationFinderServiceInterface;
use Dhl\Sdk\LocationFinder\Api\ServiceFactoryInterface;
use Dhl\Sdk\LocationFinder\Exception\ServiceException;
use Dhl\Sdk\LocationFinder\Serializer\ClassMap;
use Dhl\Sdk\LocationFinder\Soap\SoapServiceFactory;
use Psr\Log\LoggerInterface;

/**
 * Class ServiceFactory
 *
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
class ServiceFactory implements ServiceFactoryInterface
{
    /**
     * @param string $appId
     * @param string $appToken
     * @param LoggerInterface $logger
     * @param bool $sandboxMode
     * @return LocationFinderServiceInterface
     * @throws ServiceException
     */
    public function createLocationFinderService(
        string $appId,
        string $appToken,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): LocationFinderServiceInterface {
        $wsdl = sprintf(
            '%s/%s/%s',
            'https://cig.dhl.de/cig-wsdls/com/dpdhl/wsdl/standortsuche-api',
            '1.1',
            'standortsuche-api-1.1.wsdl'
        );

        $options = [
            'trace' => 1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => ClassMap::get(),
            'login' => $appId,
            'password' => $appToken,
        ];

        if ($sandboxMode) {
            // override wsdl's default service location
            $options['location'] = self::BASE_URL_SANDBOX;
        }

        try {
            $soapClient = new \SoapClient($wsdl, $options);
        } catch (\SoapFault $fault) {
            throw new ServiceException('An error occurred while creating service.', (int) $fault->getCode(), $fault);
        }

        $soapServiceFactory = new SoapServiceFactory($soapClient);
        return $soapServiceFactory->createLocationFinderService($appId, $appToken, $logger, $sandboxMode);
    }
}
