<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class AutomatWS
{
    /**
     * @var int|null $automatType
     */
    protected $automatType = null;

    /**
     * @var int|null $positionType
     */
    protected $positionType = null;

    /**
     * @var int|null $opStatusType
     */
    protected $opStatusType = null;

    /**
     * @var boolean|null $hasXLPostfach
     */
    protected $hasXLPostfach = null;

    /**
     * @var int|null $distance
     */
    protected $distance = null;

    /**
     * @var string|null $outOfServiceFrom
     */
    protected $outOfServiceFrom = null;

    /**
     * @var Address|null $address
     */
    protected $address = null;

    /**
     * @var LocationWithDistance|null $location
     */
    protected $location = null;

    /**
     * @var Branch|null $branch
     */
    protected $branch = null;

    /**
     * @var Timeinfos|null $timeinfos
     */
    protected $timeinfos = null;

    /**
     * @var boolean|null $hasMobileParcelStampPrintService
     */
    protected $hasMobileParcelStampPrintService = null;

    /**
     * @var int|null $id
     */
    protected $id = null;

    /**
     * @var int|null $objectId
     */
    protected $objectId = null;

    /**
     * @var int|null $packstationId
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
        return (int) $this->automatType;
    }

    /**
     * @param int $automatType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->positionType;
    }

    /**
     * @param int $positionType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->opStatusType;
    }

    /**
     * @param int $opStatusType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (bool) $this->hasXLPostfach;
    }

    /**
     * @param boolean $hasXLPostfach
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->distance;
    }

    /**
     * @param int $distance
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * fixme(nr): messy. be type-safe.
     *
     * @return \DateTime|bool|null
     */
    public function getOutOfServiceFrom()
    {
        if ($this->outOfServiceFrom === null) {
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
     * @fixme(nr): setters are never used in SOAP context, must not contain any logic.
     *
     * @param \DateTime $outOfServiceFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setOutOfServiceFrom(\DateTime $outOfServiceFrom = null)
    {
        if ($outOfServiceFrom instanceof \DateTime) {
            $this->outOfServiceFrom = $outOfServiceFrom->format(\DateTime::ATOM);
        } else {
            $this->outOfServiceFrom = null;
        }

        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return LocationWithDistance|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param LocationWithDistance $location
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return Branch|null
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param Branch $branch
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @return Timeinfos|null
     */
    public function getTimeinfos()
    {
        return $this->timeinfos;
    }

    /**
     * @param Timeinfos $timeinfos
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (bool) $this->hasMobileParcelStampPrintService;
    }

    /**
     * @param boolean $hasMobileParcelStampPrintService
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->id;
    }

    /**
     * @param int $id
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->objectId;
    }

    /**
     * @param int $objectId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
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
        return (int) $this->packstationId;
    }

    /**
     * @param int $packstationId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatWS
     */
    public function setPackstationId($packstationId)
    {
        $this->packstationId = $packstationId;
        return $this;
    }
}
