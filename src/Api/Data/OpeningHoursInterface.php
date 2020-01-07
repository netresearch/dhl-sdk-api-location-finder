<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Api\Data;

/**
 * Interface OpeningHoursInterface
 *
 * @api
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
interface OpeningHoursInterface
{
    /**
     * Returns the closing hour of the place or service on the given day(s) of the week.
     *
     * @return string
     */
    public function getCloses(): string;

    /**
     * Returns the day of the week for which these opening hours are valid.
     *
     * @return int
     */
    public function getDayOfWeek(): int;

    /**
     * Returns the opening hour of the place or service on the given day(s) of the week.
     *
     * @return string
     */
    public function getOpens(): string;
}
