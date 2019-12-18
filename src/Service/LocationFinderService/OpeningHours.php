<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Service\LocationFinderService;

use Dhl\Sdk\LocationFinder\Api\Data\OpeningHoursInterface;

/**
 * Class OpeningHours
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class OpeningHours implements OpeningHoursInterface
{
    /**
     * @var string
     */
    private $opens;

    /**
     * @var string
     */
    private $closes;

    /**
     * The day of the week for which these opening hours are valid, 1-7 (1 = Monday, 7 = Sunday).
     *
     * @var int
     */
    private $dayOfWeek;

    /**
     * OpeningHours constructor.
     *
     * @param string $opens
     * @param string $closes
     * @param int $dayOfWeek
     */
    public function __construct(
        string $opens,
        string $closes,
        int $dayOfWeek
    ) {
        $this->opens = $opens;
        $this->closes = $closes;
        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * Returns the closing hour of the place or service on the given day(s) of the week.
     *
     * @return string
     */
    public function getCloses(): string
    {
        return $this->closes;
    }

    /**
     * Returns the day of the week for which these opening hours are valid.
     *
     * @return int
     */
    public function getDayOfWeek(): int
    {
        return $this->dayOfWeek;
    }

    /**
     * Returns the opening hour of the place or service on the given day(s) of the week.
     *
     * @return string
     */
    public function getOpens(): string
    {
        return $this->opens;
    }
}
