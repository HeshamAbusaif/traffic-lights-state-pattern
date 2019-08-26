<?php
class GoTrafficLightsState extends AbstractTrafficLightsState
{
    /**
     * @return CautionTrafficLightsState
     */
    public function caution()
    {
        echo "Yellow \n";
        return new CautionTrafficLightsState();
    }
}
