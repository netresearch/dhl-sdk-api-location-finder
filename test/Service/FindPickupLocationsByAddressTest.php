<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Test\Service;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;
use Dhl\Sdk\LocationFinder\Exception\ServiceException;
use Dhl\Sdk\LocationFinder\Serializer\ClassMap;
use Dhl\Sdk\LocationFinder\Soap\SoapServiceFactory;
use Dhl\Sdk\LocationFinder\Test\SoapClientFake;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\Test\TestLogger;

/**
 * Class FindPickupLocationsByAddressTest
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class FindPickupLocationsByAddressTest extends TestCase
{
    /**
     * @test
     * @throws ServiceException
     */
    public function findLocations()
    {
        $response = __DIR__ . '/../Provider/_files/pickup/address_response.xml';

        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl(
            SoapClientFake::WSDL,
            SoapClientFake::class,
            '',
            ['__doRequest'],
            true,
            [
                'trace' => 1,
                'classmap' => ClassMap::get(),
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]
        );

        $soapClient->expects(self::once())
                   ->method('__doRequest')
                   ->willReturn(file_get_contents($response));

        $logger = new TestLogger();

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createLocationFinderService(
            'magento_1',
            '2de26b775e59279464d1c2f8546432e62413372421c672db36eaacfc2f',
            $logger,
            true
        );

        $locations = $service->getPickUpLocations('DE', '00000', 'Leipzig', 'Nonnenstraße', '11d');

        self::assertNotEmpty($locations);
        self::assertContainsOnlyInstancesOf(LocationInterface::class, $locations);
        self::assertSame($locations[0]->getId(), '4067005');
    }

    /**
     * @throws ServiceException
     */
    public function testServerError()
    {
        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl(
            SoapClientFake::WSDL,
            SoapClientFake::class,
            '',
            ['__doRequest'],
            true,
            [
                'trace' => 1,
                'classmap' => ClassMap::get(),
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            ]
        );

        $logger = new TestLogger();

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createLocationFinderService(
            'magento_1',
            '2de26b775e59279464d1c2f8546432e62413372421c672db36eaacfc2f',
            $logger,
            true
        );

        $soapClient->expects(self::once())
            ->method('__doRequest')
            ->willThrowException(new \SoapFault('500', 'Oh no!'));
        $this->expectException(DetailedServiceException::class);
        $this->expectExceptionMessage('Oh no!');

        $service->getPickUpLocations('DE', '00000', 'Leipzig', 'Nonnenstraße', '11d');
    }
}
