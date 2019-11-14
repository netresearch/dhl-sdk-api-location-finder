<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class getPackstationsFilialeDirektByCoordinateResponse
{

    /**
     * @var automatFD[] $packstation_filialedirekt
     */
    protected $packstation_filialedirekt = null;


    public function __construct()
    {
    }

    /**
     * @return automatFD[]
     */
    public function getPackstation_filialedirekt()
    {
        return $this->packstation_filialedirekt;
    }

    /**
     * @param automatFD[] $packstation_filialedirekt
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\getPackstationsFilialeDirektByCoordinateResponse
     */
    public function setPackstation_filialedirekt(array $packstation_filialedirekt = null)
    {
        $this->packstation_filialedirekt = $packstation_filialedirekt;
        return $this;
    }
}
