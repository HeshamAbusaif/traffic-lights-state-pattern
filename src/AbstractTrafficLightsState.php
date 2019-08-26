<?php
abstract class AbstractTrafficLightsState implements TrafficLightsState
{
    /**
     * @throws IllegalStateTransitionException
     */
    public function stop()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function caution()
    {
        throw new IllegalStateTransitionException;
    }

    /**
     * @throws IllegalStateTransitionException
     */
    public function go()
    {
        throw new IllegalStateTransitionException;
    }
}
