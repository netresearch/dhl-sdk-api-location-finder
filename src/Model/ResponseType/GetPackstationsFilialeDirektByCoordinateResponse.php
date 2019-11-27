<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetPackstationsFilialeDirektByCoordinateResponse
{

    /**
     * @var AutomatFD[] $packstation_filialedirekt
     */
    protected $packstation_filialedirekt = [];

    public function __construct()
    {
    }

    /**
     * @return AutomatFD[]
     */
    public function getPackstationFilialedirekt()
    {
        return $this->packstation_filialedirekt;
    }

    /**
     * @param AutomatFD[] $packstation_filialedirekt
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetPackstationsFilialeDirektByCoordinateResponse
     */
    public function setPackstationFilialedirekt(array $packstation_filialedirekt = [])
    {
        $this->packstation_filialedirekt = $packstation_filialedirekt;
        return $this;
    }
}
