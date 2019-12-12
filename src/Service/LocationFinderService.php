<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service;

use Dhl\Sdk\LocationFinder\Api\LocationFinderServiceInterface;
use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;
use Dhl\Sdk\LocationFinder\Model\PickupLocationsResponseMapper;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\InputAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\Location;
use Dhl\Sdk\LocationFinder\Soap\AbstractClient;

/**
 * Class LocationFinderService
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class LocationFinderService implements LocationFinderServiceInterface
{
    /**
     * @var AbstractClient
     */
    private $client;

    /**
     * @var PickupLocationsResponseMapper
     */
    private $pickupLocationsResponseMapper;

    /**
     * LocationFinderService constructor.
     *
     * @param AbstractClient $client
     * @param PickupLocationsResponseMapper $pickupLocationsResponseMapper
     */
    public function __construct(
        AbstractClient $client,
        PickupLocationsResponseMapper $pickupLocationsResponseMapper
    ) {
        $this->client = $client;
        $this->pickupLocationsResponseMapper = $pickupLocationsResponseMapper;
    }

    public function getPickUpLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array {
        $address = new InputAddress();
        $address->setCountryCode($countryCode);
        $address->setZip($zip);
        $address->setCity($city);
        $address->setStreet($streetName);
        $address->setStreetNo($streetNo);

        $request = new GetPackstationsFilialeDirektByAddress();
        $request->setAddress($address);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByAddress($request);

        return $this->pickupLocationsResponseMapper->map($response->getPackstationFilialedirekt());
    }

    public function getPickUpLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array
    {
        $location = new Location($latitude, $longitude);
        $location->setCountryCode($countryCode);

        $request = new GetPackstationsFilialeDirektByCoordinate();
        $request->setLocation($location);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByCoordinate($request);

        return $this->pickupLocationsResponseMapper->map($response->getPackstationFilialedirekt());
    }

    /**
     * @param string $countryCode
     * @param string $zip
     * @param string $city
     * @param string|null $streetName
     * @param string|null $streetNo
     * @return array
     * @throws DetailedServiceException
     */
    public function getDropOffLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array {
        $address = new InputAddress();
        $address->setCountryCode($countryCode);
        $address->setZip($zip);
        $address->setCity($city);
        $address->setStreet($streetName);
        $address->setStreetNo($streetNo);

        $request = new GetPackstationsPaketboxesByAddress();
        $request->setAddress($address);

        $response = $this->client->getPackstationsPaketboxesByAddress($request);
        // todo(nr): Map response

        return $response->getPackstationPaketbox();
    }

    /**
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return array
     * @throws DetailedServiceException
     */
    public function getDropOffLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array
    {
        $request = new GetPackstationsPaketboxesByCoordinate();
        $response = $this->client->getPackstationsPaketboxesByCoordinate($request);
        // todo(nr): Map response

        return $response->getPackstationPaketbox();
    }
}
