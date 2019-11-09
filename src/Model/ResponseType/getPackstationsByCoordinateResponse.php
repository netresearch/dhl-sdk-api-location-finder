<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class getPackstationsByCoordinateResponse
{

    /**
     * @var automatWS[] $packstation
     */
    protected $packstation = null;


    public function __construct()
    {

    }

    /**
     * @return automatWS[]
     */
    public function getPackstation()
    {
      return $this->packstation;
    }

    /**
     * @param automatWS[] $packstation
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsByCoordinateResponse
     */
    public function setPackstation(array $packstation = null)
    {
      $this->packstation = $packstation;
      return $this;
    }

}
