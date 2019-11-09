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
class getPaketboxesByCoordinate
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
     * @return getPaketboxesByCoordinate
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param location $location
     * @return getPaketboxesByCoordinate
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
