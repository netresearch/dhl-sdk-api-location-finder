<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPackstationsByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getPackstationsByCoordinate
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
     * @param string $key
     * @return getPackstationsByCoordinate
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param location $location
     * @return getPackstationsByCoordinate
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }
}
