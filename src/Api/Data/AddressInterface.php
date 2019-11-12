<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api\Data;

/**
 * Interface AddressInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface AddressInterface
{
    /**
     * Returns the street name.
     *
     * @return string
     */
    public function getStreet(): string;

    /**
     * Returns the street number.
     *
     * @return string
     */
    public function getStreetNumber(): string;

    /**
     * Returns the postal code.
     *
     * @return string
     */
    public function getPostalCode(): string;

    /**
     * Returns the city name.
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * Returns the country name.
     *
     * @return string
     */
    public function getCountry(): string;
}
