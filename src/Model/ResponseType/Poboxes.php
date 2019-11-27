<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class Poboxes
{

    /**
     * @var Pobox $pobox
     */
    protected $pobox = null;

    /**
     * @param Pobox $pobox
     */
    public function __construct($pobox)
    {
        $this->pobox = $pobox;
    }

    /**
     * @return Pobox
     */
    public function getPobox()
    {
        return $this->pobox;
    }

    /**
     * @param Pobox $pobox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Poboxes
     */
    public function setPobox($pobox)
    {
        $this->pobox = $pobox;
        return $this;
    }
}
