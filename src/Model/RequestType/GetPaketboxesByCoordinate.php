<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPaketboxesByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPaketboxesByCoordinate
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
     * @return GetPaketboxesByCoordinate
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param Location $location
     * @return GetPaketboxesByCoordinate
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}
