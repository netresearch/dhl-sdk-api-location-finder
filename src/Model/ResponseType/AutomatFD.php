<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class AutomatFD
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
     * @var string|null $outOfServiceFrom
     */
    protected $outOfServiceFrom = null;

    /**
     * @var Address $address
     */
    protected $address = null;

    /**
     * @var LocationWithDistance $location
     */
    protected $location = null;

    /**
     * @var Timeinfos $timeinfos
     */
    protected $timeinfos = null;

    /**
     * @var int $branchType
     */
    protected $branchType = null;

    /**
     * @var int $branchTypeOz
     */
    protected $branchTypeOz = null;

    /**
     * @var string $branchTypePF
     */
    protected $branchTypePF = null;

    /**
     * @var boolean $hasNewService
     */
    protected $hasNewService = null;

    /**
     * @var int $hasBankingService
     */
    protected $hasBankingService = null;

    /**
     * @var boolean $hasFinanceService
     */
    protected $hasFinanceService = null;

    /**
     * @var boolean $hasPobox
     */
    protected $hasPobox = null;

    /**
     * @var boolean $hasDhlExprIntern
     */
    protected $hasDhlExprIntern = null;

    /**
     * @var boolean $hasCargoAcceptance
     */
    protected $hasCargoAcceptance = null;

    /**
     * @var boolean $hasHandicappedAccess
     */
    protected $hasHandicappedAccess = null;

    /**
     * @var boolean $hasParkingArea
     */
    protected $hasParkingArea = null;

    /**
     * @var boolean $hasCertificate
     */
    protected $hasCertificate = null;

    /**
     * @var boolean $sellsPostbusTickets
     */
    protected $sellsPostbusTickets = null;

    /**
     * @var boolean $openingEquals
     */
    protected $openingEquals = null;

    /**
     * @var float $numFinanceCounsels
     */
    protected $numFinanceCounsels = null;

    /**
     * @var string $depotServiceNo
     */
    protected $depotServiceNo = null;

    /**
     * @var boolean $depotServiceOeffentlich
     */
    protected $depotServiceOeffentlich = null;

    /**
     * @var string $website
     */
    protected $website = null;

    /**
     * @var string $externalMarker
     */
    protected $externalMarker = null;

    /**
     * @var ServiceTypes $serviceTypes
     */
    protected $serviceTypes = null;

    /**
     * @var Poboxes $poboxes
     */
    protected $poboxes = null;

    /**
     * @var ServicesAddition $servicesAddition
     */
    protected $servicesAddition = null;

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
     * @param int $id
     * @param int $objectId
     * @param int $packstationId
     */
    public function __construct($distance, $id, $objectId, $packstationId)
    {
        $this->distance = $distance;
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }

    /**
     * @return \DateTime|bool|null
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return LocationWithDistance
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param LocationWithDistance $location
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return Timeinfos
     */
    public function getTimeinfos()
    {
        return $this->timeinfos;
    }

    /**
     * @param Timeinfos $timeinfos
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setTimeinfos($timeinfos)
    {
        $this->timeinfos = $timeinfos;
        return $this;
    }

    /**
     * @return int
     */
    public function getBranchType()
    {
        return $this->branchType;
    }

    /**
     * @param int $branchType
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setBranchType($branchType)
    {
        $this->branchType = $branchType;
        return $this;
    }

    /**
     * @return int
     */
    public function getBranchTypeOz()
    {
        return $this->branchTypeOz;
    }

    /**
     * @param int $branchTypeOz
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setBranchTypeOz($branchTypeOz)
    {
        $this->branchTypeOz = $branchTypeOz;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchTypePF()
    {
        return $this->branchTypePF;
    }

    /**
     * @param string $branchTypePF
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setBranchTypePF($branchTypePF)
    {
        $this->branchTypePF = $branchTypePF;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasNewService()
    {
        return $this->hasNewService;
    }

    /**
     * @param boolean $hasNewService
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasNewService($hasNewService)
    {
        $this->hasNewService = $hasNewService;
        return $this;
    }

    /**
     * @return int
     */
    public function getHasBankingService()
    {
        return $this->hasBankingService;
    }

    /**
     * @param int $hasBankingService
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasBankingService($hasBankingService)
    {
        $this->hasBankingService = $hasBankingService;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasFinanceService()
    {
        return $this->hasFinanceService;
    }

    /**
     * @param boolean $hasFinanceService
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasFinanceService($hasFinanceService)
    {
        $this->hasFinanceService = $hasFinanceService;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasPobox()
    {
        return $this->hasPobox;
    }

    /**
     * @param boolean $hasPobox
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasPobox($hasPobox)
    {
        $this->hasPobox = $hasPobox;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDhlExprIntern()
    {
        return $this->hasDhlExprIntern;
    }

    /**
     * @param boolean $hasDhlExprIntern
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasDhlExprIntern($hasDhlExprIntern)
    {
        $this->hasDhlExprIntern = $hasDhlExprIntern;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasCargoAcceptance()
    {
        return $this->hasCargoAcceptance;
    }

    /**
     * @param boolean $hasCargoAcceptance
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasCargoAcceptance($hasCargoAcceptance)
    {
        $this->hasCargoAcceptance = $hasCargoAcceptance;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasHandicappedAccess()
    {
        return $this->hasHandicappedAccess;
    }

    /**
     * @param boolean $hasHandicappedAccess
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasHandicappedAccess($hasHandicappedAccess)
    {
        $this->hasHandicappedAccess = $hasHandicappedAccess;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasParkingArea()
    {
        return $this->hasParkingArea;
    }

    /**
     * @param boolean $hasParkingArea
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasParkingArea($hasParkingArea)
    {
        $this->hasParkingArea = $hasParkingArea;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasCertificate()
    {
        return $this->hasCertificate;
    }

    /**
     * @param boolean $hasCertificate
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setHasCertificate($hasCertificate)
    {
        $this->hasCertificate = $hasCertificate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSellsPostbusTickets()
    {
        return $this->sellsPostbusTickets;
    }

    /**
     * @param boolean $sellsPostbusTickets
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setSellsPostbusTickets($sellsPostbusTickets)
    {
        $this->sellsPostbusTickets = $sellsPostbusTickets;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOpeningEquals()
    {
        return $this->openingEquals;
    }

    /**
     * @param boolean $openingEquals
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setOpeningEquals($openingEquals)
    {
        $this->openingEquals = $openingEquals;
        return $this;
    }

    /**
     * @return float
     */
    public function getNumFinanceCounsels()
    {
        return $this->numFinanceCounsels;
    }

    /**
     * @param float $numFinanceCounsels
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setNumFinanceCounsels($numFinanceCounsels)
    {
        $this->numFinanceCounsels = $numFinanceCounsels;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepotServiceNo()
    {
        return $this->depotServiceNo;
    }

    /**
     * @param string $depotServiceNo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setDepotServiceNo($depotServiceNo)
    {
        $this->depotServiceNo = $depotServiceNo;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDepotServiceOeffentlich()
    {
        return $this->depotServiceOeffentlich;
    }

    /**
     * @param boolean $depotServiceOeffentlich
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setDepotServiceOeffentlich($depotServiceOeffentlich)
    {
        $this->depotServiceOeffentlich = $depotServiceOeffentlich;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalMarker()
    {
        return $this->externalMarker;
    }

    /**
     * @param string $externalMarker
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setExternalMarker($externalMarker)
    {
        $this->externalMarker = $externalMarker;
        return $this;
    }

    /**
     * @return ServiceTypes
     */
    public function getServiceTypes()
    {
        return $this->serviceTypes;
    }

    /**
     * @param ServiceTypes $serviceTypes
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setServiceTypes($serviceTypes)
    {
        $this->serviceTypes = $serviceTypes;
        return $this;
    }

    /**
     * @return Poboxes
     */
    public function getPoboxes()
    {
        return $this->poboxes;
    }

    /**
     * @param Poboxes $poboxes
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setPoboxes($poboxes)
    {
        $this->poboxes = $poboxes;
        return $this;
    }

    /**
     * @return ServicesAddition
     */
    public function getServicesAddition()
    {
        return $this->servicesAddition;
    }

    /**
     * @param ServicesAddition $servicesAddition
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setServicesAddition($servicesAddition)
    {
        $this->servicesAddition = $servicesAddition;
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\AutomatFD
     */
    public function setPackstationId($packstationId)
    {
        $this->packstationId = $packstationId;
        return $this;
    }
}
