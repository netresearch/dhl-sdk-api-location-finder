<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class getBranchesByCoordinateResponse
{

    /**
     * @var branch[] $branch
     */
    protected $branch = null;


    public function __construct()
    {

    }

    /**
     * @return branch[]
     */
    public function getBranch()
    {
      return $this->branch;
    }

    /**
     * @param branch[] $branch
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\getBranchesByCoordinateResponse
     */
    public function setBranch(array $branch = null)
    {
      $this->branch = $branch;
      return $this;
    }

}
