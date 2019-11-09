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
class inputAddress
{
    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $streetNo
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
     * @param string $street
     * @return inputAddress
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @param string $streetNo
     * @return inputAddress
     */
    public function setStreetNo($streetNo)
    {
      $this->streetNo = $streetNo;
      return $this;
    }

    /**
     * @param string $zip
     * @return inputAddress
     */
    public function setZip($zip)
    {
      $this->zip = $zip;
      return $this;
    }

    /**
     * @param string $city
     * @return inputAddress
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @param string $countryCode
     * @return inputAddress
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }
}
