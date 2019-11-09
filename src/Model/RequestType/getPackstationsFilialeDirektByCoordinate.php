<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPackstationsFilialeDirektByCoordinate
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getPackstationsFilialeDirektByCoordinate
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
     * @return getPackstationsFilialeDirektByCoordinate
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param location $location
     * @return getPackstationsFilialeDirektByCoordinate
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }
}
