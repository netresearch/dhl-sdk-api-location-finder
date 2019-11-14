<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class automatWS
{

    /**
     * @var int $automatType
     */
    protected $automatType = null;

    /**
     * @var int $positionType
     */
    protected $positionType = null;

    /**
     * @var int $opStatusType
     */
    protected $opStatusType = null;

    /**
     * @var boolean $hasXLPostfach
     */
    protected $hasXLPostfach = null;

    /**
     * @var int $distance
     */
    protected $distance = null;

    /**
     * @var \DateTime $outOfServiceFrom
     */
    protected $outOfServiceFrom = null;

    /**
     * @var address $address
     */
    protected $address = null;

    /**
     * @var locationWithDistance $location
     */
    protected $location = null;

    /**
     * @var branch $branch
     */
    protected $branch = null;

    /**
     * @var timeinfos $timeinfos
     */
    protected $timeinfos = null;

    /**
     * @var boolean $hasMobileParcelStampPrintService
     */
    protected $hasMobileParcelStampPrintService = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $objectId
     */
    protected $objectId = null;

    /**
     * @var int $packstationId
     */
    protected $packstationId = null;

    /**
     * @param int $distance
     * @param boolean $hasMobileParcelStampPrintService
     * @param int $id
     * @param int $objectId
     * @param int $packstationId
     */
    public function __construct($distance, $hasMobileParcelStampPrintService, $id, $objectId, $packstationId)
    {
        $this->distance = $distance;
        $this->hasMobileParcelStampPrintService = $hasMobileParcelStampPrintService;
        $this->id = $id;
        $this->objectId = $objectId;
        $this->packstationId = $packstationId;
    }

    /**
     * @return int
     */
    public function getAutomatType()
    {
        return $this->automatType;
    }

    /**
     * @param int $automatType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setAutomatType($automatType)
    {
        $this->automatType = $automatType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionType()
    {
        return $this->positionType;
    }

    /**
     * @param int $positionType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setPositionType($positionType)
    {
        $this->positionType = $positionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpStatusType()
    {
        return $this->opStatusType;
    }

    /**
     * @param int $opStatusType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setOpStatusType($opStatusType)
    {
        $this->opStatusType = $opStatusType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasXLPostfach()
    {
        return $this->hasXLPostfach;
    }

    /**
     * @param boolean $hasXLPostfach
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setHasXLPostfach($hasXLPostfach)
    {
        $this->hasXLPostfach = $hasXLPostfach;
        return $this;
    }

    /**
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOutOfServiceFrom()
    {
        if ($this->outOfServiceFrom == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->outOfServiceFrom);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $outOfServiceFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setOutOfServiceFrom(\DateTime $outOfServiceFrom = null)
    {
        if ($outOfServiceFrom == null) {
            $this->outOfServiceFrom = null;
        } else {
            $this->outOfServiceFrom = $outOfServiceFrom->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param address $address
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return locationWithDistance
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param locationWithDistance $location
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return branch
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param branch $branch
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @return timeinfos
     */
    public function getTimeinfos()
    {
        return $this->timeinfos;
    }

    /**
     * @param timeinfos $timeinfos
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setTimeinfos($timeinfos)
    {
        $this->timeinfos = $timeinfos;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasMobileParcelStampPrintService()
    {
        return $this->hasMobileParcelStampPrintService;
    }

    /**
     * @param boolean $hasMobileParcelStampPrintService
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setHasMobileParcelStampPrintService($hasMobileParcelStampPrintService)
    {
        $this->hasMobileParcelStampPrintService = $hasMobileParcelStampPrintService;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackstationId()
    {
        return $this->packstationId;
    }

    /**
     * @param int $packstationId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\automatWS
     */
    public function setPackstationId($packstationId)
    {
        $this->packstationId = $packstationId;
        return $this;
    }
}
