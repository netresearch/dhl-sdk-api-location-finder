<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class Timeinfos
{

    /**
     * @var Timeinfo $timeinfo
     */
    protected $timeinfo = null;

    /**
     * @param Timeinfo $timeinfo
     */
    public function __construct($timeinfo)
    {
        $this->timeinfo = $timeinfo;
    }

    /**
     * @return Timeinfo
     */
    public function getTimeinfo()
    {
        return $this->timeinfo;
    }

    /**
     * @param Timeinfo $timeinfo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Timeinfos
     */
    public function setTimeinfo($timeinfo)
    {
        $this->timeinfo = $timeinfo;
        return $this;
    }
}
