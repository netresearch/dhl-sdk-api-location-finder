<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetPackstationsByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPackstationsByAddress
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
     * @param string $key
     * @return GetPackstationsByAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param InputAddress $address
     * @return GetPackstationsByAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
