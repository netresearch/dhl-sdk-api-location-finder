<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class timeinfo
{

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var int $dayFrom
     */
    protected $dayFrom = null;

    /**
     * @var int $dayTo
     */
    protected $dayTo = null;

    /**
     * @var string $timeFrom
     */
    protected $timeFrom = null;

    /**
     * @var string $timeTo
     */
    protected $timeTo = null;


    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayFrom()
    {
      return $this->dayFrom;
    }

    /**
     * @param int $dayFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo
     */
    public function setDayFrom($dayFrom)
    {
      $this->dayFrom = $dayFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayTo()
    {
      return $this->dayTo;
    }

    /**
     * @param int $dayTo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo
     */
    public function setDayTo($dayTo)
    {
      $this->dayTo = $dayTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
      return $this->timeFrom;
    }

    /**
     * @param string $timeFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo
     */
    public function setTimeFrom($timeFrom)
    {
      $this->timeFrom = $timeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
      return $this->timeTo;
    }

    /**
     * @param string $timeTo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\timeinfo
     */
    public function setTimeTo($timeTo)
    {
      $this->timeTo = $timeTo;
      return $this;
    }

}
