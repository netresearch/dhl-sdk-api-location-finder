<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetPackstationsPaketboxesByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPackstationsPaketboxesByCoordinate
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
     * @param string $key
     * @return GetPackstationsPaketboxesByCoordinate
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param Location $location
     * @return GetPackstationsPaketboxesByCoordinate
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}
