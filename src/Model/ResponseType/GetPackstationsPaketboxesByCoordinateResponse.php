<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetPackstationsPaketboxesByCoordinateResponse
{
    /**
     * @var AutomatWS[] $packstation_paketbox
     */
    protected $packstation_paketbox = [];

    public function __construct()
    {
    }

    /**
     * @return AutomatWS[]
     */
    public function getPackstationPaketbox()
    {
        return $this->packstation_paketbox;
    }

    /**
     * @param AutomatWS[] $packstation_paketbox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsPaketboxesByCoordinateResponse
     */
    public function setPackstationPaketbox(array $packstation_paketbox = [])
    {
        $this->packstation_paketbox = $packstation_paketbox;
        return $this;
    }
}
