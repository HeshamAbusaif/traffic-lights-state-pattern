<?php
use Carbon\Carbon;

class DayTimes
{

    /**
     * @var Date
     */
    private $startDayTime;
    /**
     * @var Date
     */
    private $endDayTime;
    /**
     * @var Date
     */
    private $timeNow;


    /**
     * DayTimes constructor.
     */
    public function __construct() {
        $this->startDayTime = '06:00:00';
        $this->endDayTime = '23:00:00';
        $this->timeNow = Carbon::now('UTC')->format('H:i:s');
    }

    /**
     * @return bool
     */
    public function DayTime() :bool {

        if ($this->timeNow >= $this->startDayTime && $this->timeNow < $this->endDayTime) {
            return true;
        } else {
            return false;
        }
    }

}