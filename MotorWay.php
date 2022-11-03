<?php

require_once('HighWay.php');
require_once('Car.php');

final class MotorWay extends HighWay {

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        parent::__construct($nbLanes, $maxSpeed);
    }

    public function addVehicle($vehicle) : string {
        $sentence = '';
        if($vehicle instanceof Car){
            $this->currentVehicles[] = $vehicle;
            $sentence = 'Voiture ajoutée.';
        } else {
            $sentence = 'Véhicule interdit sur cette autoroute !';
        }
        return $sentence;
    }
}