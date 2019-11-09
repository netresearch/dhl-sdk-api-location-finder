<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class timeinfos
{

    /**
     * @var timeinfo $timeinfo
     */
    protected $timeinfo = null;

    /**
     * @param timeinfo $timeinfo
     */
    public function __construct($timeinfo)
    {
      $this->timeinfo = $timeinfo;
    }

    /**
     * @return timeinfo
     */
    public function getTimeinfo()
    {
      return $this->timeinfo;
    }

    /**
     * @param timeinfo $timeinfo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfos
     */
    public function setTimeinfo($timeinfo)
    {
      $this->timeinfo = $timeinfo;
      return $this;
    }

}
