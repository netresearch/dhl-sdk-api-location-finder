<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class getPaketboxesByCoordinateResponse
{

    /**
     * @var automatWS[] $paketbox
     */
    protected $paketbox = null;


    public function __construct()
    {

    }

    /**
     * @return automatWS[]
     */
    public function getPaketbox()
    {
      return $this->paketbox;
    }

    /**
     * @param automatWS[] $paketbox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\getPaketboxesByCoordinateResponse
     */
    public function setPaketbox(array $paketbox = null)
    {
      $this->paketbox = $paketbox;
      return $this;
    }

}
