<?php
/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class getPackstationsPaketboxesByAddress
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class getPackstationsPaketboxesByAddress
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
     * @return getPackstationsPaketboxesByAddress
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param inputAddress $address
     * @return getPackstationsPaketboxesByAddress
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
