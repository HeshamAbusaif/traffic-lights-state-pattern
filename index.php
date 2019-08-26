<?php
require __DIR__ . '/src/autoload.php';


initLights();

function initLights() {

    $time = new DayTimes();

    if($time->DayTime()) {
        $trafficStatus = new TrafficLights(new StopTrafficLightsState());
        $trafficStatus->go();
        sleep(30);
        $trafficStatus->caution();
        sleep(5);
        $trafficStatus->stop();
        sleep(40);
    } else {
        $trafficStatus = new TrafficLights(new GoTrafficLightsState());
        sleep(2);
        $trafficStatus->caution();
    }

    initLights();

}

