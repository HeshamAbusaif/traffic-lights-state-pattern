<?php
class StopTrafficLightsState extends AbstractTrafficLightsState
{
    /**
     * @return GoTrafficLightsState
     */
    public function go()
    {
        echo "Green \n";
        return new GoTrafficLightsState;
    }

}
