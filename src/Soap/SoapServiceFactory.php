<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Soap;

use Dhl\Sdk\LocationFinder\Api\LocationFinderServiceInterface;
use Dhl\Sdk\LocationFinder\Api\ServiceFactoryInterface;
use Dhl\Sdk\LocationFinder\Model\PickupLocationsResponseMapper;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService;
use Psr\Log\LoggerInterface;

/**
 * Class SoapServiceFactory
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * SoapServiceFactory constructor.
     *
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function createLocationFinderService(
        string $appId,
        string $appToken,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): LocationFinderServiceInterface {
        $pickupLocationsResponseMapper = new PickupLocationsResponseMapper();

        $pluginClient = new Client($this->soapClient);
        $pluginClient = new LoggerDecorator($pluginClient, $this->soapClient, $logger);

        return new LocationFinderService(
            $pluginClient,
            $pickupLocationsResponseMapper
        );
    }
}
