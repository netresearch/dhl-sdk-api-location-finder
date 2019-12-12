<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfo;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Address;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Location;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\OpeningHours;

/**
 * Pickup location response mapper.
 *
 * Map an array of `AutomatFD` response types into the SDK's public api data models.
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class PickupLocationsResponseMapper
{
    /**
     * Time info types.
     */
    const TIME_INFO_TYPE_STORE = 1;

    /**
     * Determine the type of the pickup location.
     *
     * @param AutomatFD $apiLocation
     * @return string
     */
    private function getLocationType(AutomatFD $apiLocation): string
    {
        if ($apiLocation->getPackstationId() > 0) {
            return LocationInterface::TYPE_PACKSTATION;
        }

        if ($apiLocation->getDepotServiceNo()) {
            if ($apiLocation->getBranchTypePF() === 'dhlpaketshop') {
                return LocationInterface::TYPE_PARCELSHOP;
            }

            return LocationInterface::TYPE_POSTOFFICE;
        }

        return LocationInterface::TYPE_OTHER;
    }

    /**
     * @param AutomatFD $packingStation
     * @return OpeningHours[]
     */
    private function mapOpeningHours(AutomatFD $packingStation): array
    {
        $openingHours = [];
        /** @var Timeinfo $timeInfo */
        foreach ((array)$packingStation->getTimeinfos()->getTimeinfo() as $timeInfo) {
            if ($timeInfo->getType() !== self::TIME_INFO_TYPE_STORE) {
                continue;
            }

            $openingHours[] = new OpeningHours(
                $timeInfo->getTimeFrom(),
                $timeInfo->getTimeTo(),
                $timeInfo->getDayTo()
            );
        }
        return $openingHours;
    }

    /**
     * Map the webservice data structure to response objects suitable for third-party consumption.
     *
     * @param AutomatFD[] $apiLocations
     *
     * @return LocationInterface[]
     */
    public function map(array $apiLocations): array
    {
        $locations = [];

        foreach ($apiLocations as $apiLocation) {
            $locationType = $this->getLocationType($apiLocation);

            // country code is not returned from the web service but it's always "DE"
            $address = new Address(
                (string) $apiLocation->getAddress()->getStreet(),
                (string) $apiLocation->getAddress()->getStreetNo(),
                (string) $apiLocation->getAddress()->getZip(),
                (string) $apiLocation->getAddress()->getCity(),
                'DE'
            );

            $openingHours = $this->mapOpeningHours($apiLocation);

            $location = new Location(
                (string) $apiLocation->getId(),
                (string) ($apiLocation->getPackstationId() ?: $apiLocation->getDepotServiceNo()),
                (string) ($apiLocation->getExternalMarker() ?: $apiLocation->getAddress()->getRemark()),
                $locationType,
                (float) $apiLocation->getLocation()->getLatitude(),
                (float) $apiLocation->getLocation()->getLongitude(),
                (int) $apiLocation->getDistance(),
                $address,
                (array) $apiLocation->getServicesAddition()->getServiceAddition(),
                $openingHours,
                $apiLocation->getHasHandicappedAccess() ?: false,
                $apiLocation->getHasParkingArea() ?: false
            );

            $locations[] = $location;
        }

        return $locations;
    }
}
