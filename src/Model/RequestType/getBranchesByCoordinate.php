<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getBranchesByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getBranchesByCoordinate
{
    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var location $location
     */
    protected $location = null;

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
     * @return getBranchesByCoordinate
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param location $location
     * @return getBranchesByCoordinate
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @param string $service
     * @return getBranchesByCoordinate
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

    /**
     * @param inputTimeinfo $timeinfo
     * @return getBranchesByCoordinate
     */
    public function setTimeinfo($timeinfo)
    {
      $this->timeinfo = $timeinfo;
      return $this;
    }

    /**
     * @param boolean $hasPackageAcceptance
     * @return getBranchesByCoordinate
     */
    public function setHasPackageAcceptance($hasPackageAcceptance)
    {
      $this->hasPackageAcceptance = $hasPackageAcceptance;
      return $this;
    }

    /**
     * @param boolean $hasNoPackageAcceptance
     * @return getBranchesByCoordinate
     */
    public function setHasNoPackageAcceptance($hasNoPackageAcceptance)
    {
      $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
      return $this;
    }
}
