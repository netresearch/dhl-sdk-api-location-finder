<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class GetPaketboxesByAddressResponse
{
    /**
     * @var AutomatWS[] $paketbox
     */
    protected $paketbox = [];

    public function __construct()
    {
    }

    /**
     * @return AutomatWS[]
     */
    public function getPaketbox()
    {
        return $this->paketbox;
    }

    /**
     * @param AutomatWS[] $paketbox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\GetPaketboxesByAddressResponse
     */
    public function setPaketbox(array $paketbox = [])
    {
        $this->paketbox = $paketbox;
        return $this;
    }
}
