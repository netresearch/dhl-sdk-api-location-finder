<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetBranchesByAddressResponse
{
    /**
     * @var Branch[] $branch
     */
    protected $branch = [];

    public function __construct()
    {
    }

    /**
     * @return Branch[]
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param Branch[] $branch
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetBranchesByAddressResponse
     */
    public function setBranch(array $branch = [])
    {
        $this->branch = $branch;
        return $this;
    }
}
