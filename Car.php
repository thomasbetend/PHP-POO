<?php

require_once('Vehicle.php');

class Car extends Vehicle {

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
}

public function start() : string {
    $sentence = "";
    if($this->hasParkBrake = true){
        throw new Exception("La voiture a le frein à main. Impossible d'avancer.");
    } else {
        $sentence = "Let's go !!!";
    }
    return $sentence;
}

public function getEnergy() : string {
    return $this->energy;
}

public function setEnergy(string $energy) : void {
        $this->energy = $energy;
    }

public function getEnergyLevel() : int {
    return $this->energyLevel;
}

public function setEnergyLevel(int $energyLevel) : void {
    $this->energyLevel = $energyLevel;
}

public function setParkBrake(bool $hasParkBrake) : void {
    $this->hasParkBrake = $hasParkBrake;
}

public function getParkBrake() : bool {
    return $this->hasParkBrake;
}

}