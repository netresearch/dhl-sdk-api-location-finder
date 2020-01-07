<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class inputAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class InputAddress
{
    /**
     * @var string|null $street
     */
    protected $street = null;

    /**
     * @var string|null $streetNo
     */
    protected $streetNo = null;

    /**
     * @var string $zip
     */
    protected $zip = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string|null $street
     * @return InputAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string|null $streetNo
     * @return InputAddress
     */
    public function setStreetNo($streetNo)
    {
        $this->streetNo = $streetNo;
        return $this;
    }

    /**
     * @param string $zip
     * @return InputAddress
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @param string $city
     * @return InputAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $countryCode
     * @return InputAddress
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
