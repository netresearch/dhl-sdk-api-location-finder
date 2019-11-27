<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetPackstationsByAddressResponse
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsByAddressResponse
     */
    public function setPackstation(array $packstation = [])
    {
        $this->packstation = $packstation;
        return $this;
    }
}
