<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfo;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfos;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Address;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Location;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\OpeningHours;

/**
 * Location response mapper.
 *
 * Map an array of `AutomatFD` response types into the SDK's public api data models.
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class LocationResponseMapper
{
    /**
     * Regular opening hours type.
     *
     * The web service returns various semi-documented time info types.
     * We only parse regular stores' opening times, not the Packstation
     * access times or the various shipping products' cut-off times.
     *
     * 1 = Filialöffnungszeit
     * 2 = Zugangszeiten SB-Bereich
     * 7 = Schlusszeit Brief
     * 8 = Schlusszeit Express
     * 9 = Schlusszeit PostExpress National
     * 10 = Schlusszeit PostExpress International
     * 11 = Geschäftsöffnungszeit
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

        if (!$packingStation->getTimeinfos() instanceof Timeinfos) {
            return $openingHours;
        }

        /** @var Timeinfo $timeInfo */
        foreach ((array) $packingStation->getTimeinfos()->getTimeinfo() as $timeInfo) {
            if ($timeInfo->getType() !== self::TIME_INFO_TYPE_STORE) {
                continue;
            }

            if ($timeInfo->getDayFrom()) {
                /**
                 * Handle day ranges
                 */
                $dayFrom = $timeInfo->getDayFrom();
                $dayTo = $timeInfo->getDayTo();
                for ($day = $dayFrom; $day <= $dayTo; $day++) {
                    $openingHours[] = new OpeningHours(
                        $timeInfo->getTimeFrom(),
                        $timeInfo->getTimeTo(),
                        $day
                    );
                }
            } else {
                /**
                 * Handle single days
                 */
                $openingHours[] = new OpeningHours(
                    $timeInfo->getTimeFrom(),
                    $timeInfo->getTimeTo(),
                    $timeInfo->getDayTo()
                );
            }
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
            if (!$apiLocation->getAddress() || !$apiLocation->getLocation()) {
                continue;
            }

            $locationType = $this->getLocationType($apiLocation);

            // country code is not returned from the web service but it's always "DE"
            $address = new Address(
                $apiLocation->getAddress()->getStreet(),
                $apiLocation->getAddress()->getStreetNo(),
                $apiLocation->getAddress()->getZip(),
                $apiLocation->getAddress()->getCity(),
                'DE'
            );

            $openingHours = $this->mapOpeningHours($apiLocation);
            $services = $apiLocation->getServicesAddition()
                ? (array) $apiLocation->getServicesAddition()->getServiceAddition()
                : [];

            $location = new Location(
                (string) $apiLocation->getId(),
                (string) ($apiLocation->getPackstationId() ?: $apiLocation->getDepotServiceNo()),
                ($apiLocation->getExternalMarker() ?: $apiLocation->getAddress()->getRemark()),
                $locationType,
                $apiLocation->getLocation()->getLatitude(),
                $apiLocation->getLocation()->getLongitude(),
                $apiLocation->getDistance(),
                $address,
                $services,
                $openingHours,
                $apiLocation->getHasHandicappedAccess() ?: false,
                $apiLocation->getHasParkingArea() ?: false
            );

            $locations[] = $location;
        }

        return $locations;
    }
}
