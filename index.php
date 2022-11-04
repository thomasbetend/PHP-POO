<?php

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



