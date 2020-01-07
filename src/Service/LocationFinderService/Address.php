<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service\LocationFinderService;

use Dhl\Sdk\LocationFinder\Api\Data\AddressInterface;

/**
 * Class Address
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Address implements AddressInterface
{
    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $streetNumber;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * Address constructor.
     *
     * @param string $street
     * @param string $streetNumber
     * @param string $postalCode
     * @param string $city
     * @param string $country
     */
    public function __construct(
        string $street,
        string $streetNumber,
        string $postalCode,
        string $city,
        string $country
    ) {
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Returns the street name.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Returns the street number.
     *
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    /**
     * Returns the postal code.
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Returns the city name.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Returns the country name.
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}
