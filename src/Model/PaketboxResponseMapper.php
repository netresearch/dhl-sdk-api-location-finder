<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Address;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Location;

/**
 * Paketbox response mapper.
 *
 * Map an array of `AutomatWS` response types into the SDK's public api data models.
 *
 * @author Sebastian Ertner <sebastian.ertner@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class PaketboxResponseMapper
{
    /**
     * Map the webservice data structure to response objects suitable for third-party consumption.
     *
     * @param AutomatWS[] $apiLocations
     *
     * @return LocationInterface[]
     */
    public function map(array $apiLocations): array
    {
        $locations = [];
        foreach ($apiLocations as $apiLocation) {
            if (!$apiLocation->getAddress() || !$apiLocation->getLocation()) {
                continue;
            }

            // country code is not returned from the web service but it's always "DE"
            $address = new Address(
                $apiLocation->getAddress()->getStreet(),
                $apiLocation->getAddress()->getStreetNo(),
                $apiLocation->getAddress()->getZip(),
                $apiLocation->getAddress()->getCity(),
                'DE'
            );

            $location = new Location(
                (string) $apiLocation->getId(),
                '',
                $apiLocation->getAddress()->getRemark(),
                LocationInterface::TYPE_PAKETBOX,
                $apiLocation->getLocation()->getLatitude(),
                $apiLocation->getLocation()->getLongitude(),
                $apiLocation->getDistance(),
                $address,
                [],
                [],
                false,
                false
            );

            $locations[] = $location;
        }

        return $locations;
    }
}
