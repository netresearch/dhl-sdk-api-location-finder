<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class GetPaketboxesByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GetPaketboxesByAddress
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
     * @return GetPaketboxesByAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param InputAddress $address
     * @return GetPaketboxesByAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
