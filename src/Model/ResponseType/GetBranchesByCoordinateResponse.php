<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetBranchesByCoordinateResponse
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetBranchesByCoordinateResponse
     */
    public function setBranch(array $branch = [])
    {
        $this->branch = $branch;
        return $this;
    }
}
