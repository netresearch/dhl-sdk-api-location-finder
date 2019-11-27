<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class Automats
{

    /**
     * @var AutomatWS $automat
     */
    protected $automat = null;

    /**
     * @param AutomatWS $automat
     */
    public function __construct($automat)
    {
        $this->automat = $automat;
    }

    /**
     * @return AutomatWS
     */
    public function getAutomat()
    {
        return $this->automat;
    }

    /**
     * @param AutomatWS $automat
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Automats
     */
    public function setAutomat($automat)
    {
        $this->automat = $automat;
        return $this;
    }
}
