<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getBranchesByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getBranchesByAddress
{
    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var inputAddress $address
     */
    protected $address = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var inputTimeinfo $timeinfo
     */
    protected $timeinfo = null;

    /**
     * @var boolean $hasPackageAcceptance
     */
    protected $hasPackageAcceptance = null;

    /**
     * @var boolean $hasNoPackageAcceptance
     */
    protected $hasNoPackageAcceptance = null;

    /**
     * @param string $key
     * @return getBranchesByAddress
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param inputAddress $address
     * @return getBranchesByAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @param string $service
     * @return getBranchesByAddress
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @param inputTimeinfo $timeinfo
     * @return getBranchesByAddress
     */
    public function setTimeinfo($timeinfo)
    {
      $this->timeinfo = $timeinfo;
      return $this;
    }

    /**
     * @param boolean $hasPackageAcceptance
     * @return getBranchesByAddress
     */
    public function setHasPackageAcceptance($hasPackageAcceptance)
    {
      $this->hasPackageAcceptance = $hasPackageAcceptance;
      return $this;
    }

    /**
     * @param boolean $hasNoPackageAcceptance
     * @return getBranchesByAddress
     */
    public function setHasNoPackageAcceptance($hasNoPackageAcceptance)
    {
      $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
      return $this;
    }
}
