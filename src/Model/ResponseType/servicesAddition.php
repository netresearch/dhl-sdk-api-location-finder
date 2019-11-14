<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class servicesAddition
{

    /**
     * @var string $serviceAddition
     */
    protected $serviceAddition = null;

    /**
     * @param string $serviceAddition
     */
    public function __construct($serviceAddition)
    {
        $this->serviceAddition = $serviceAddition;
    }

    /**
     * @return string
     */
    public function getServiceAddition()
    {
        return $this->serviceAddition;
    }

    /**
     * @param string $serviceAddition
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\servicesAddition
     */
    public function setServiceAddition($serviceAddition)
    {
        $this->serviceAddition = $serviceAddition;
        return $this;
    }
}
