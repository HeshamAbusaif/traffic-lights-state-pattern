<?php

class TrafficLights
{
    /**
     * @var TrafficLightsState
     */
    private $state;

    public function __construct(TrafficLightsState $state)
    {
        $this->setState($state);
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function go()
    {
        $this->setState($this->state->go());
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function stop()
    {
        $this->setState($this->state->stop());
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function caution()
    {
        $this->setState($this->state->caution());
    }

    /**
     * @return bool
     */
    public function isGreen()
    {
        return $this->state instanceof GoTrafficLightsState;

    }

    /**
     * @return bool
     */
    public function isRed()
    {
       return $this->state instanceof StopTrafficLightsState;

    }

    /**
     * @return bool
     */
    public function isYellow()
    {
        return $this->state instanceof CautionTrafficLightsState;
    }

    private function setState(TrafficLightsState $state)
    {
        $this->state = $state;
    }
}
