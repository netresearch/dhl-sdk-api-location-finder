<?php

namespace Dhl\Sdk\LocationFinder\Model\ResponseType;

class LocationWithDistance
{
    /**
     * @var float|null $latitude
     */
    protected $latitude = null;

    /**
     * @var float|null $longitude
     */
    protected $longitude = null;

    /**
     * @var int|null $distance
     */
    protected $distance = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param int $distance
     */
    public function __construct($latitude, $longitude, $distance)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->distance = $distance;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return (float) $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\LocationWithDistance
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return (float) $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\LocationWithDistance
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
     * @return \Dhl\Sdk\LocationFinder\Model\ResponseType\LocationWithDistance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
        return $this;
    }
}
