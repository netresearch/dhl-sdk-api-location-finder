<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPackstationsPaketboxesByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getPackstationsPaketboxesByCoordinate
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
     * @return getPackstationsPaketboxesByCoordinate
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param location $location
     * @return getPackstationsPaketboxesByCoordinate
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }
}
