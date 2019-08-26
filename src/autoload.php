<?php
require 'vendor/autoload.php';

spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'abstracttrafficlightsstate' => '/AbstractTrafficLightsState.php',
                'trafficlights' => '/TrafficLights.php',
                'trafficlightsstate' => '/TrafficLightsState.php',
                'illegalstatetransitionexception' => '/IllegalStateTransitionException.php',
                'stoptrafficlightsstate' => '/TrafficLightsStates/StopTrafficLightsState.php',
                'cautiontrafficlightsstate' => '/TrafficLightsStates/CautionTrafficLightsState.php',
                'gotrafficlightsstate' => '/TrafficLightsStates/GoTrafficLightsState.php',
                'daytimes' => '/DayTimes.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
