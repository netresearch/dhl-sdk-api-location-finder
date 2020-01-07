<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace Dhl\Sdk\LocationFinder\Model\RequestType;

/**
 * Class inputTimeinfo
 *
 * @author Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class InputTimeinfo
{

    /**
     * @var boolean $isOpenedToday
     */
    protected $isOpenedToday = null;

    /**
     * @var string $weekday
     */
    protected $weekday = null;

    /**
     * @var string $time
     */
    protected $time = null;


    public function __construct()
    {
    }

    /**
     * @return boolean
     */
    public function getIsOpenedToday()
    {
        return $this->isOpenedToday;
    }

    /**
     * @param boolean $isOpenedToday
     * @return InputTimeinfo
     */
    public function setIsOpenedToday($isOpenedToday)
    {
        $this->isOpenedToday = $isOpenedToday;
        return $this;
    }

    /**
     * @return string
     */
    public function getWeekday()
    {
        return $this->weekday;
    }

    /**
     * @param string $weekday
     * @return InputTimeinfo
     */
    public function setWeekday($weekday)
    {
        $this->weekday = $weekday;
        return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     * @return InputTimeinfo
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }
}
