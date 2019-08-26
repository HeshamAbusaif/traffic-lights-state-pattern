<?php
class CautionTrafficLightsState extends AbstractTrafficLightsState
{
    /**
     * @return StopTrafficLightsState
     */
    public function stop()
    {
        echo "Red \n";
        return new StopTrafficLightsState;
    }

    /**
     * @return GoTrafficLightsState
     */
    public function go()
    {
        echo 'Green';
        return new GoTrafficLightsState;
    }

}
