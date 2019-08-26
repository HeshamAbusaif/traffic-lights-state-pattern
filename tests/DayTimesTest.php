<?php


class DayTimesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DayTimes
     */
    private $dayTime;

    /**
     * @covers DayTimes::testisDayTime
     */
    public function testisDayTime()
    {
        $this->dayTime = new DayTimes();
        $this->assertTrue($this->dayTime->DayTime());
    }

}