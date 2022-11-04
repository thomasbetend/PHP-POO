<?php

class Speedometer {
    public const MILE = 0.621;

    public static function convertKmToMile (float $km) : float {
        return $km * self::MILE;
    }
}