<?php

/* function invert(int $number) : float {
    if($number === 0) {
        throw new Exception("Division par zéro");
    }
    return 1 / $number;

}

try {
    echo invert(5), "<br>";
    echo invert(0);
} catch (Exception $e){
    echo $e->getMessage(), "<br>";
} */

require_once('Car.php');
$car1 = new Car('blue', 4, 'electric');

$car1->setCurrentSpeed(70);
echo $car1->brake(), "<br>";
$car1->setParkBrake(true);

try {
    echo $car1->start();
}
catch (Exception $e){
    echo $e->getMessage(), "<br>";
    $car1->setParkBrake(false);
}
finally {
    echo "Ma voiture roule comme un donut.";
}

var_dump($car1);


/* class Point {
    protected int $x;
    protected int $y;

    public function __construct($x, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
}

$point1 = new Point(2); */

