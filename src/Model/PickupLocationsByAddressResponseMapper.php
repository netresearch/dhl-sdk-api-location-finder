<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Model\ResponseType\automatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsFilialeDirektByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Address;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Location;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\OpeningHours;

/**
 * This class maps the response from the "getPackstationsFilialeDirektByAddress" to into data models
 * implementing the public API data types.
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class PickupLocationsByAddressResponseMapper
{
    /**
     * Time info types.
     */
    const TIME_INFO_TYPE_STORE = 1;

    /**
     * Map the webservice data structure to response objects suitable for third-party consumption.
     *
     * @param getPackstationsFilialeDirektByAddressResponse $response
     *
     * @return LocationInterface[]
     */
    public function map(getPackstationsFilialeDirektByAddressResponse $response): array
    {
        $locations = [];

        /** @var automatFD $packingStation */
        foreach ($response->getPackstation_filialedirekt() as $packingStation) {
            $address = new Address(
                $packingStation->getAddress()->getStreet(),
                $packingStation->getAddress()->getStreetNo(),
                $packingStation->getAddress()->getZip(),
                $packingStation->getAddress()->getCity(),
                $packingStation->getAddress()->getCountry()
            );

            $openingHours = [];

            /** @var timeinfo $timeInfo */
            foreach ((array) $packingStation->getTimeinfos()->getTimeinfo() as $timeInfo) {
                if ($timeInfo->getType() !== self::TIME_INFO_TYPE_STORE) {
                    continue;
                }

                $openingHours[] = new OpeningHours(
                    $timeInfo->getTimeFrom(),
                    $timeInfo->getTimeTo(),
                    $timeInfo->getDayTo()
                );
            }

            $location = new Location(
                (string) $packingStation->getId(),
                (string) $packingStation->getPackstationId(),
                (string) $packingStation->getExternalMarker(),
                (string) $packingStation->getBranchTypePF(),
                $packingStation->getLocation()->getLatitude(),
                $packingStation->getLocation()->getLongitude(),
                $packingStation->getDistance(),
                $address,
                (array) $packingStation->getServicesAddition()->getServiceAddition(),
                $openingHours
            );

            $locations[] = $location;
        }

        return $locations;
    }
}
