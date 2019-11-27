<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetBranchesByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetBranchesByAddress
{
    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var InputAddress $address
     */
    protected $address = null;

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
     * @return GetBranchesByAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param InputAddress $address
     * @return GetBranchesByAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $service
     * @return GetBranchesByAddress
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @param InputTimeinfo $timeinfo
     * @return GetBranchesByAddress
     */
    public function setTimeinfo($timeinfo)
    {
        $this->timeinfo = $timeinfo;
        return $this;
    }

    /**
     * @param boolean $hasPackageAcceptance
     * @return GetBranchesByAddress
     */
    public function setHasPackageAcceptance($hasPackageAcceptance)
    {
        $this->hasPackageAcceptance = $hasPackageAcceptance;
        return $this;
    }

    /**
     * @param boolean $hasNoPackageAcceptance
     * @return GetBranchesByAddress
     */
    public function setHasNoPackageAcceptance($hasNoPackageAcceptance)
    {
        $this->hasNoPackageAcceptance = $hasNoPackageAcceptance;
        return $this;
    }
}
