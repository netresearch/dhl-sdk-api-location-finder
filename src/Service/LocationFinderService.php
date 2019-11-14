<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Api\LocationFinderServiceInterface;
use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;
use Dhl\Sdk\LocationFinder\Model\PickupLocationsByAddressResponseMapper;
use Dhl\Sdk\LocationFinder\Model\RequestType\getBranchesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsFilialeDirektByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsPaketboxesByAddress;
use Dhl\Sdk\LocationFinder\Model\RequestType\getPackstationsPaketboxesByCoordinate;
use Dhl\Sdk\LocationFinder\Model\RequestType\inputAddress;
use Dhl\Sdk\LocationFinder\Soap\AbstractClient;
use Psr\Log\LoggerInterface;

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
     * @var PickupLocationsByAddressResponseMapper
     */
    private $pickupLocationsByAddressResponseMapper;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * LocationFinderService constructor.
     *
     * @param AbstractClient $client
     * @param PickupLocationsByAddressResponseMapper $pickupLocationsByAddressResponseMapper
     */
    public function __construct(
        AbstractClient $client,
        PickupLocationsByAddressResponseMapper $pickupLocationsByAddressResponseMapper,
        LoggerInterface $logger
    ) {
        $this->client = $client;
        $this->pickupLocationsByAddressResponseMapper = $pickupLocationsByAddressResponseMapper;
        $this->logger = $logger;
    }

    /**
     * @param string $countryCode
     * @param string $zip
     * @param string $city
     * @param string|null $streetName
     * @param string|null $streetNo
     * @return LocationInterface[]
     * @throws DetailedServiceException
     */
    public function getPickUpLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array {
        $address = new inputAddress();
        $address->setCountryCode($countryCode);
        $address->setZip($zip);
        $address->setCity($city);
        $address->setStreet($streetName);
        $address->setStreetNo($streetNo);

        $request = new getPackstationsFilialeDirektByAddress();
        $request->setAddress($address);
        $request->setKey('');

        $response = $this->client->getPackstationsFilialeDirektByAddress($request);

        return $this->pickupLocationsByAddressResponseMapper->map($response);
    }

    /**
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return array
     * @throws DetailedServiceException
     */
    public function getPickUpLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array
    {
        $request = new getBranchesByCoordinate();
        $response = $this->client->getBranchesByCoordinate($request);
        // todo(nr): Map response

        return $response->getBranch();
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
        $address = new inputAddress();
        $address->setCountryCode($countryCode);
        $address->setZip($zip);
        $address->setCity($city);
        $address->setStreet($streetName);
        $address->setStreetNo($streetNo);

        $request = new getPackstationsPaketboxesByAddress();
        $request->setAddress($address);

        $response = $this->client->getPackstationsPaketboxesByAddress($request);
        // todo(nr): Map response

        return $response->getPackstation_paketbox();
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
        $request = new getPackstationsPaketboxesByCoordinate();
        $response = $this->client->getPackstationsPaketboxesByCoordinate($request);
        // todo(nr): Map response

        return $response->getPackstation_paketbox();
    }
}
