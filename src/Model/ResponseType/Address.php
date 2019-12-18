<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class Address
{

    /**
     * @var string|null $street
     */
    protected $street = null;

    /**
     * @var string|null $streetNo
     */
    protected $streetNo = null;

    /**
     * @var string|null $zip
     */
    protected $zip = null;

    /**
     * @var string|null $city
     */
    protected $city = null;

    /**
     * @var string|null $district
     */
    protected $district = null;

    /**
     * @var string|null $region
     */
    protected $region = null;

    /**
     * @var string|null $country
     */
    protected $country = null;

    /**
     * @var string|null $iso3166
     */
    protected $iso3166 = null;

    /**
     * @var string|null $remark
     */
    protected $remark = null;


    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return (string) $this->street;
    }

    /**
     * @param string $street
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNo()
    {
        return (string) $this->streetNo;
    }

    /**
     * @param string $streetNo
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setStreetNo($streetNo)
    {
        $this->streetNo = $streetNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return (string) $this->zip;
    }

    /**
     * @param string $zip
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return (string) $this->city;
    }

    /**
     * @param string $city
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return (string) $this->district;
    }

    /**
     * @param string $district
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return (string) $this->region;
    }

    /**
     * @param string $region
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return (string) $this->country;
    }

    /**
     * @param string $country
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getIso3166()
    {
        return (string) $this->iso3166;
    }

    /**
     * @param string $iso3166
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setIso3166($iso3166)
    {
        $this->iso3166 = $iso3166;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return (string) $this->remark;
    }

    /**
     * @param string $remark
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\Address
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
}
