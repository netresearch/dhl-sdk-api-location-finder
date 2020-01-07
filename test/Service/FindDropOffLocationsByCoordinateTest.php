<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Test\Service;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Exception\ServiceException;
use Dhl\Sdk\LocationFinder\Serializer\ClassMap;
use Dhl\Sdk\LocationFinder\Soap\SoapServiceFactory;
use Dhl\Sdk\LocationFinder\Test\SoapClientFake;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\Test\TestLogger;

/**
 * Class FindPickupLocationsByCoordinateTest
 *
 * @author Sebastian Ertner <sebastian.ertner@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class FindDropOffLocationsByCoordinateTest extends TestCase
{
    /**
     * @test
     * @throws ServiceException
     */
    public function findLocations()
    {
        $wsdl = __DIR__ . '/../Provider/_files/standortsuche/standortsuche-api-1.1.wsdl';
        $packstationResponse = __DIR__ . '/../Provider/_files/dropoff/packstation_coordinate_response.xml';
        $paketboxResponse = __DIR__ . '/../Provider/_files/dropoff/paketbox_coordinate_response.xml';

        /** @var \SoapClient|MockObject $soapClient */
        $soapClient = $this->getMockFromWsdl(
            $wsdl,
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

        $soapClient->expects(self::any())
            ->method('__doRequest')
            ->will($this->onConsecutiveCalls(
                file_get_contents($packstationResponse),
                file_get_contents($paketboxResponse)
            ));

        $logger = new TestLogger();

        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createLocationFinderService(
            'magento_1',
            '2de26b775e59279464d1c2f8546432e62413372421c672db36eaacfc2f',
            $logger,
            true
        );

        $locations = $service->getDropOffLocationsByCoordinate(
            'DE',
            51.3773276,
            12.4882551
        );

        self::assertNotEmpty($locations);
        self::assertContainsOnlyInstancesOf(LocationInterface::class, $locations);
        self::assertSame($locations[0]->getId(), '4113872');
    }
}
