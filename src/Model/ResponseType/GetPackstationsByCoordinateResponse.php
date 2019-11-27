<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetPackstationsByCoordinateResponse
{

    /**
     * @var AutomatWS[] $packstation
     */
    protected $packstation = [];

    public function __construct()
    {
    }

    /**
     * @return AutomatWS[]
     */
    public function getPackstation()
    {
        return $this->packstation;
    }

    /**
     * @param AutomatWS[] $packstation
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsByCoordinateResponse
     */
    public function setPackstation(array $packstation = [])
    {
        $this->packstation = $packstation;
        return $this;
    }
}
