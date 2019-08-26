<?php
interface TrafficLightsState
{
    public function stop();
    public function caution();
    public function go();
}
