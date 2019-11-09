<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Test\Service;

use Dhl\Sdk\LocationFinder\Exception\ServiceException;
use Dhl\Sdk\LocationFinder\Service\ServiceFactory;
use Psr\Log\Test\TestLogger;

/**
 * Class FindPickupLocationsByAddressTest
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class FindPickupLocationsByAddressTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     * @throws ServiceException
     */
    public function findLocations()
    {
        $logger = new TestLogger();
        $serviceFactory = new ServiceFactory();
        $service = $serviceFactory->createLocationFinderService(
            'magento_1',
            '2de26b775e59279464d1c2f8546432e62413372421c672db36eaacfc2f',
            $logger,
            true
        );

        try {
            $locations = $service->getPickUpLocations('DE', '04229', 'Leipzig', 'Nonnenstraße', '11d');
        } catch (\SoapFault $fault) {
            throw new ServiceException($fault->getMessage(), $fault->getCode(), $fault);
        }

        self::assertNotEmpty($locations);
    }
}
