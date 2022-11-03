<?php

require_once('HighWay.php');

final class PedestrianWay extends HighWay {

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        parent::__construct($nbLanes, $maxSpeed);
    }

    public function addVehicle($vehicle) : string {
        $sentence = '';
        if(($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)){
            $this->currentVehicle[] = $vehicle;
            $sentence = 'Bienvenue !';
        }
        else {
            $sentence = 'Seuls les vélos et les skateboards sont acceptés.';
        }
        return $sentence;
    }
}