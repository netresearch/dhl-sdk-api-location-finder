<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetPackstationsFilialeDirektByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPackstationsFilialeDirektByCoordinate
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
     * @return GetPackstationsFilialeDirektByCoordinate
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param Location $location
     * @return GetPackstationsFilialeDirektByCoordinate
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}
