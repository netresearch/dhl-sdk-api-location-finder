<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class Location
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Location
{
    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
    /**
     * @param string $countryCode
     * @return Location
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
