<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPackstationsFilialeDirektByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getPackstationsFilialeDirektByAddress
{
    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var inputAddress $address
     */
    protected $address = null;

    /**
     * @param string $key
     * @return getPackstationsFilialeDirektByAddress
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @param inputAddress $address
     * @return getPackstationsFilialeDirektByAddress
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
