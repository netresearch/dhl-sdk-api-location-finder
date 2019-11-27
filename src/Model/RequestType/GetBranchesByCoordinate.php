<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetBranchesByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetBranchesByCoordinate
{
    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var Location $location
     */
    protected $location = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var InputTimeinfo $timeinfo
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
     * @return GetBranchesByCoordinate
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param Location $location
     * @return GetBranchesByCoordinate
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param string $service
     * @return GetBranchesByCoordinate
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @param InputTimeinfo $timeinfo
     * @return GetBranchesByCoordinate
     */
    public function setTimeinfo($timeinfo)
    {
        $this->timeinfo = $timeinfo;
        return $this;
    }

    /**
     * @param boolean $hasPackageAcceptance
     * @return GetBranchesByCoordinate
     */
    public function setHasPackageAcceptance($hasPackageAcceptance)
    {
        $this->hasPackageAcceptance = $hasPackageAcceptance;
        return $this;
    }

    /**
     * @param boolean $hasNoPackageAcceptance
     * @return GetBranchesByCoordinate
     */
    public function setHasNoPackageAcceptance($hasNoPackageAcceptance)
    {
        $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
        return $this;
    }
}
