<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api;

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
     * @param string $countryCode
     * @param string $zip
     * @param string $city
     * @param string|null $streetName
     * @param string|null $streetNo
     * @return mixed[]
     */
    public function getPickUpLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array;

    /**
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return mixed[]
     */
    public function getPickUpLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array;

    /**
     * @param string $countryCode
     * @param string $zip
     * @param string $city
     * @param string|null $streetName
     * @param string|null $streetNo
     * @return mixed[]
     */
    public function getDropOffLocations(
        string $countryCode,
        string $zip,
        string $city,
        string $streetName = null,
        string $streetNo = null
    ): array;

    /**
     * @param string $countryCode
     * @param float $latitude
     * @param float $longitude
     * @return mixed[]
     */
    public function getDropOffLocationsByCoordinate(string $countryCode, float $latitude, float $longitude): array;
}
