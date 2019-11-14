<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class pobox
{

    /**
     * @var int $branchId
     */
    protected $branchId = null;

    /**
     * @var string $rioId
     */
    protected $rioId = null;

    /**
     * @var boolean $hasPublicAccess
     */
    protected $hasPublicAccess = null;

    /**
     * @var boolean $isStandalone
     */
    protected $isStandalone = null;

    /**
     * @var string $pfaPlace
     */
    protected $pfaPlace = null;

    /**
     * @var boolean $hasDeliveryFunction
     */
    protected $hasDeliveryFunction = null;

    /**
     * @var string $zipOfPfa
     */
    protected $zipOfPfa = null;

    /**
     * @var int $numberPfLocker
     */
    protected $numberPfLocker = null;

    /**
     * @var int $numberPf
     */
    protected $numberPf = null;

    /**
     * @var int $numberReservedPf
     */
    protected $numberReservedPf = null;

    /**
     * @var int $pfLockerNrFrom
     */
    protected $pfLockerNrFrom = null;

    /**
     * @var int $pfLockerNrTo
     */
    protected $pfLockerNrTo = null;

    /**
     * @var int $pfNrFrom
     */
    protected $pfNrFrom = null;

    /**
     * @var int $pfNrTo
     */
    protected $pfNrTo = null;

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
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $pfaId
     */
    protected $pfaId = null;

    /**
     * @param int $id
     * @param int $pfaId
     */
    public function __construct($id, $pfaId)
    {
        $this->id = $id;
        $this->pfaId = $pfaId;
    }

    /**
     * @return int
     */
    public function getBranchId()
    {
        return $this->branchId;
    }

    /**
     * @param int $branchId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setBranchId($branchId)
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRioId()
    {
        return $this->rioId;
    }

    /**
     * @param string $rioId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setRioId($rioId)
    {
        $this->rioId = $rioId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasPublicAccess()
    {
        return $this->hasPublicAccess;
    }

    /**
     * @param boolean $hasPublicAccess
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setHasPublicAccess($hasPublicAccess)
    {
        $this->hasPublicAccess = $hasPublicAccess;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStandalone()
    {
        return $this->isStandalone;
    }

    /**
     * @param boolean $isStandalone
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setIsStandalone($isStandalone)
    {
        $this->isStandalone = $isStandalone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPfaPlace()
    {
        return $this->pfaPlace;
    }

    /**
     * @param string $pfaPlace
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfaPlace($pfaPlace)
    {
        $this->pfaPlace = $pfaPlace;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasDeliveryFunction()
    {
        return $this->hasDeliveryFunction;
    }

    /**
     * @param boolean $hasDeliveryFunction
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setHasDeliveryFunction($hasDeliveryFunction)
    {
        $this->hasDeliveryFunction = $hasDeliveryFunction;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipOfPfa()
    {
        return $this->zipOfPfa;
    }

    /**
     * @param string $zipOfPfa
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setZipOfPfa($zipOfPfa)
    {
        $this->zipOfPfa = $zipOfPfa;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberPfLocker()
    {
        return $this->numberPfLocker;
    }

    /**
     * @param int $numberPfLocker
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setNumberPfLocker($numberPfLocker)
    {
        $this->numberPfLocker = $numberPfLocker;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberPf()
    {
        return $this->numberPf;
    }

    /**
     * @param int $numberPf
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setNumberPf($numberPf)
    {
        $this->numberPf = $numberPf;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberReservedPf()
    {
        return $this->numberReservedPf;
    }

    /**
     * @param int $numberReservedPf
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setNumberReservedPf($numberReservedPf)
    {
        $this->numberReservedPf = $numberReservedPf;
        return $this;
    }

    /**
     * @return int
     */
    public function getPfLockerNrFrom()
    {
        return $this->pfLockerNrFrom;
    }

    /**
     * @param int $pfLockerNrFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfLockerNrFrom($pfLockerNrFrom)
    {
        $this->pfLockerNrFrom = $pfLockerNrFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getPfLockerNrTo()
    {
        return $this->pfLockerNrTo;
    }

    /**
     * @param int $pfLockerNrTo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfLockerNrTo($pfLockerNrTo)
    {
        $this->pfLockerNrTo = $pfLockerNrTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPfNrFrom()
    {
        return $this->pfNrFrom;
    }

    /**
     * @param int $pfNrFrom
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfNrFrom($pfNrFrom)
    {
        $this->pfNrFrom = $pfNrFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getPfNrTo()
    {
        return $this->pfNrTo;
    }

    /**
     * @param int $pfNrTo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfNrTo($pfNrTo)
    {
        $this->pfNrTo = $pfNrTo;
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setTimeinfos($timeinfos)
    {
        $this->timeinfos = $timeinfos;
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPfaId()
    {
        return $this->pfaId;
    }

    /**
     * @param int $pfaId
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\pobox
     */
    public function setPfaId($pfaId)
    {
        $this->pfaId = $pfaId;
        return $this;
    }
}
