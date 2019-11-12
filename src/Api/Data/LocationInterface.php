<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api\Data;

/**
 * Interface LocationInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface LocationInterface
{
    /**
     * Returns the id of the DHL Service Point location.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Returns the number of the DHL Service Point location.
     *
     * @return string
     */
    public function getNumber(): string;

    /**
     * Returns the name of the DHL Service Point location.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns the type of the DHL Service Point location, e.g. "packstation", "paketshop", "partneroutlet".
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Returns the latitude coordinates of the DHL Service Point location.
     *
     * @return float
     */
    public function getLatitude(): float;

    /**
     * Returns the longitude coordinates of the DHL Service Point location.
     *
     * @return float
     */
    public function getLongitude(): float;

    /**
     * Returns the distance in meters (m) from the requested geographical coordinates.
     *
     * @return int
     */
    public function getDistanceInMeter(): int;

    /**
     * Returns the address of the DHL Service Point location.
     *
     * @return AddressInterface
     */
    public function getAddress(): AddressInterface;

    /**
     * Return the list of services available at the DHL Service Point location.
     *
     * @return string[]
     */
    public function getServices(): array;

    /**
     * Returns a list of the opening hours of the DHL Service Point location.
     *
     * @return OpeningHoursInterface[]
     */
    public function getOpeningHours(): array;
}
