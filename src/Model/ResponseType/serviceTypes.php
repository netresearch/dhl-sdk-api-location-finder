<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class serviceTypes
{

    /**
     * @var int $serviceType
     */
    protected $serviceType = null;

    /**
     * @param int $serviceType
     */
    public function __construct($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return int
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param int $serviceType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\serviceTypes
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }
}
