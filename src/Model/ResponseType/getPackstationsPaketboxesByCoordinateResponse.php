<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class getPackstationsPaketboxesByCoordinateResponse
{

    /**
     * @var automatWS[] $packstation_paketbox
     */
    protected $packstation_paketbox = null;


    public function __construct()
    {

    }

    /**
     * @return automatWS[]
     */
    public function getPackstation_paketbox()
    {
      return $this->packstation_paketbox;
    }

    /**
     * @param automatWS[] $packstation_paketbox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsPaketboxesByCoordinateResponse
     */
    public function setPackstation_paketbox(array $packstation_paketbox = null)
    {
      $this->packstation_paketbox = $packstation_paketbox;
      return $this;
    }

}
