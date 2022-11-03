<?php

require_once('HighWay.php');

final class ResidentialWay extends HighWay {

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        parent::__construct($nbLanes, $maxSpeed);
    }

    public function addVehicle($vehicle) : string {
        $sentence = '';
        if(!($vehicle instanceof Vehicle)){
            $sentence = 'Seulement les véhicules sont acceptés.';
        }
        else {
            $sentence = 'Bienvenue, tous les véhicules sont acceptés.';
            $this->currentVehicle[] = $vehicle;
        }
        return $sentence;
    }
}