<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD;
use Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsFilialeDirektByAddressResponse;
use Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfo;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Address;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\Location;
use Dhl\Sdk\LocationFinder\Service\LocationFinderService\OpeningHours;

/**
 * This class maps the response from the "GetPackstationsFilialeDirektByAddress" to into data models
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
     * @param GetPackstationsFilialeDirektByAddressResponse $response
     *
     * @return LocationInterface[]
     */
    public function map(GetPackstationsFilialeDirektByAddressResponse $response): array
    {
        $locations = [];

        /** @var AutomatFD $packingStation */
        foreach ($response->getPackstationFilialedirekt() as $packingStation) {
            $location = new Location(
                (string)$packingStation->getId(),
                (string)($packingStation->getPackstationId() ?: $packingStation->getDepotServiceNo()),
                (string)($packingStation->getExternalMarker() ?: $packingStation->getAddress()->getRemark()),
                $this->mapType($packingStation),
                (float)$packingStation->getLocation()->getLatitude(),
                (float)$packingStation->getLocation()->getLongitude(),
                (int)$packingStation->getDistance(),
                $this->mapAddress($packingStation),
                (array)$packingStation->getServicesAddition()->getServiceAddition(),
                $this->mapOpeningHours($packingStation)
            );

            $locations[] = $location;
        }

        return $locations;
    }

    /**
     * Country code is not taken from $packingStation->getAddress()->getCountry()
     * but hard-coded to "DE", because the API will always return "Deutschland".
     *
     * @param AutomatFD $packingStation
     * @return Address
     */
    private function mapAddress(AutomatFD $packingStation): Address
    {
        return new Address(
            (string)$packingStation->getAddress()->getStreet(),
            (string)$packingStation->getAddress()->getStreetNo(),
            (string)$packingStation->getAddress()->getZip(),
            (string)$packingStation->getAddress()->getCity(),
            'DE'
        );
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
     * @param AutomatFD $packingStation
     * @return string
     */
    private function mapType(AutomatFD $packingStation): string
    {
        if ($packingStation->getPackstationId() > 0) {
            return 'packstation';
        }
        if ($packingStation->getDepotServiceNo()) {
            if ($packingStation->getBranchTypePF() === 'dhlpaketshop') {
                return 'dhlpaketshop';
            }
            return 'postfiliale';
        }

        return '';
    }
}
