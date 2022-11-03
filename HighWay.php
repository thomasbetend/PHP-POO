<?php

abstract class HighWay {
    
    protected array $currentVehicles;
    protected int $nbLanes;
    protected int $maxSpeed;

    public function __construct(int $nbLanes, int $maxSpeed)
    {
        $this->nbLanes = $nbLanes;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicles() : array {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles) : void {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLanes() : int {
        return $this->nbLanes;
    }

    public function setNbLanes($nbLanes) : void {
        $this->nbLanes = $nbLanes;
    }

    public function getMaxSpeed() : int {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed) : void {
        $this->maxSpeed = $maxSpeed;
    }

}