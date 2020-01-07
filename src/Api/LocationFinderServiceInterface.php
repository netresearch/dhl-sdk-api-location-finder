<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api;

use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Exception\DetailedServiceException;

/**
 * Interface LocationFinderServiceInterface
 *
 * @api
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface LocationFinderServiceInterface
{
    /**
     * Find pickup locations by given address parameters.
     *
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
    ): array;

    /**
     * Find pickup locations by given coordinates.
     *
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return LocationInterface[]
     * @throws DetailedServiceException
     */
    public function getPickUpLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array;

    /**
     * Find drop-off locations by given address parameters.
     *
     * @param string $countryCode
     * @param string $zip
     * @param string $city
     * @param string|null $streetName
     * @param string|null $streetNo
     * @return LocationInterface[]
     * @throws DetailedServiceException
     */
    public function getDropOffLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array;

    /**
     * Find drop-off locations by given coordinates.
     *
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return LocationInterface[]
     * @throws DetailedServiceException
     */
    public function getDropOffLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array;
}
