<?php

require_once('Vehicle.php');

class Skateboard extends Vehicle {
    private int $length;

    public function __construct(string $color, int $nbSeats, string $length)
    {
        parent::__construct($color, $nbSeats);
        $this->length = $length;
    }

    public function getLength() : int {
        return $this->length;
    }

    public function setLength(int $length) : void {
        $this->length = $length;
    }

}