<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service;

use Dhl\Sdk\LocationFinder\Api\LocationFinderServiceInterface;
use Dhl\Sdk\LocationFinder\Model\LocationResponseMapper;
use Dhl\Sdk\LocationFinder\Model\PaketboxResponseMapper;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPackstationsFilialeDirektByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\GetPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\InputAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\Location;
use Dhl\Sdk\LocationFinder\Soap\AbstractClient;

/**
 * Class LocationFinderService
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @author Sebastian Ertner <sebastian.ertner@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class LocationFinderService implements LocationFinderServiceInterface
{
    /**
     * @var AbstractClient
     */
    private $client;

    /**
     * @var LocationResponseMapper
     */
    private $locationResponseMapper;

    /**
     * @var PaketboxResponseMapper
     */
    private $paketboxResponseMapper;

    /**
     * LocationFinderService constructor.
     *
     * @param AbstractClient $client
     * @param LocationResponseMapper $locationResponseMapper
     * @param PaketboxResponseMapper $paketboxResponseMapper
     */
    public function __construct(
        AbstractClient $client,
        LocationResponseMapper $locationResponseMapper,
        PaketboxResponseMapper $paketboxResponseMapper
    ) {
        $this->client = $client;
        $this->locationResponseMapper = $locationResponseMapper;
        $this->paketboxResponseMapper = $paketboxResponseMapper;
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

        return $this->locationResponseMapper->map($response->getPackstationFilialedirekt());
    }

    public function getPickUpLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array
    {
        $location = new Location($latitude, $longitude);
        $location->setCountryCode($countryCode);

        $request = new GetPackstationsFilialeDirektByCoordinate();
        $request->setLocation($location);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByCoordinate($request);

        return $this->locationResponseMapper->map($response->getPackstationFilialedirekt());
    }

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

        $request = new GetPackstationsFilialeDirektByAddress();
        $request->setAddress($address);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByAddress($request);
        $dropOffLocations = $this->locationResponseMapper->map($response->getPackstationFilialedirekt());

        $request = new GetPaketboxesByAddress();
        $request->setAddress($address);
        $request->setKey('');

        $response = $this->client->getPaketboxesByAddress($request);
        $parcelBoxes = $this->paketboxResponseMapper->map($response->getPaketbox());

        return array_merge($dropOffLocations, $parcelBoxes);
    }

    public function getDropOffLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array
    {
        $location = new Location($latitude, $longitude);
        $location->setCountryCode($countryCode);

        $request = new GetPackstationsFilialeDirektByCoordinate();
        $request->setLocation($location);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByCoordinate($request);
        $dropOffLocations = $this->locationResponseMapper->map($response->getPackstationFilialedirekt());

        $request = new GetPaketboxesByCoordinate();
        $request->setLocation($location);
        $request->setKey('');

        $response = $this->client->getPaketboxesByCoordinate($request);
        $parcelBoxes = $this->paketboxResponseMapper->map($response->getPaketbox());

        return array_merge($dropOffLocations, $parcelBoxes);
    }
}
