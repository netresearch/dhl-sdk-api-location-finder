<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetPackstationsFilialeDirektByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPackstationsFilialeDirektByAddress
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
     * @return GetPackstationsFilialeDirektByAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param InputAddress $address
     * @return GetPackstationsFilialeDirektByAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
