<?php


class TrafficLightsStatesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TrafficLights
     */
    private $trafficLights;

    /**
     * @covers TrafficLights::isGreen
     */
    public function testIsGreen()
    {
        $this->trafficLights = new TrafficLights(new GoTrafficLightsState);
        $this->assertTrue($this->trafficLights->isGreen());
    }

    /**
     * @covers TrafficLights::isRed
     */
    public function testIsRed()
    {
        $this->trafficLights = new TrafficLights(new StopTrafficLightsState);
        $this->assertTrue($this->trafficLights->isRed());
    }

    /**
     * @covers TrafficLights::isYellow
     */
    public function testIsYellow()
    {
        $this->trafficLights = new TrafficLights(new CautionTrafficLightsState);
        $this->assertTrue($this->trafficLights->isYellow());
    }

}