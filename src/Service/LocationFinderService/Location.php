<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service\LocationFinderService;

use Dhl\Sdk\LocationFinder\Api\Data\AddressInterface;
use Dhl\Sdk\LocationFinder\Api\Data\LocationInterface;
use Dhl\Sdk\LocationFinder\Api\Data\OpeningHoursInterface;

/**
 * Class Location
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class Location implements LocationInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var int
     */
    private $distanceInMeter;

    /**
     * @var AddressInterface
     */
    private $address;

    /**
     * @var string[]
     */
    private $services;

    /**
     * @var OpeningHoursInterface[]
     */
    private $openingHours;

    /**
     * @var bool
     */
    private $hasHandicapAccess;

    /**
     * @var bool
     */
    private $hasParkingArea;

    /**
     * Location constructor.
     *
     * @param string $id
     * @param string $number
     * @param string $name
     * @param string $type
     * @param float $latitude
     * @param float $longitude
     * @param int $distanceInMeter
     * @param AddressInterface $address
     * @param string[] $services
     * @param OpeningHoursInterface[] $openingHours
     * @param bool $hasHandicapAccess
     * @param bool $hasParkingArea
     */
    public function __construct(
        string $id,
        string $number,
        string $name,
        string $type,
        float $latitude,
        float $longitude,
        int $distanceInMeter,
        AddressInterface $address,
        array $services,
        array $openingHours,
        bool $hasHandicapAccess = false,
        bool $hasParkingArea = false
    ) {
        $this->id = $id;
        $this->number = $number;
        $this->name = $name;
        $this->type = $type;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->distanceInMeter = $distanceInMeter;
        $this->address = $address;
        $this->services = $services;
        $this->openingHours = $openingHours;
        $this->hasHandicapAccess = $hasHandicapAccess;
        $this->hasParkingArea = $hasParkingArea;
    }

    /**
     * Returns the id of the DHL Service Point location.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Returns the number of the DHL Service Point location.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Returns the name of the DHL Service Point location.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the type of the DHL Service Point location, e.g. "packstation", "paketshop", "partneroutlet".
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Returns the latitude coordinates of the DHL Service Point location.
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Returns the longitude coordinates of the DHL Service Point location.
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Returns the distance in meters (m) from the requested geographical coordinates.
     *
     * @return int
     */
    public function getDistanceInMeter(): int
    {
        return $this->distanceInMeter;
    }

    /**
     * Returns the address of the DHL Service Point location.
     *
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface
    {
        return $this->address;
    }

    /**
     * Return the list of services available at the DHL Service Point location.
     *
     * @return string[]
     */
    public function getServicesAddition(): array
    {
        return $this->services;
    }

    /**
     * Returns a list of the opening hours of the DHL Service Point location.
     *
     * @return OpeningHoursInterface[]
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }

    /**
     * @return bool
     */
    public function hasHandicapAccess(): bool
    {
        return $this->hasHandicapAccess;
    }

    /**
     * @return bool
     */
    public function hasParkingArea(): bool
    {
        return $this->hasParkingArea;
    }
}
