<?php

require_once('Bicycle.php');
require_once('Car.php');

$bike = new Bicycle('red', 15);
$car1 = new Car('blue', 3, 'SP95');


echo $bike->brake() . "<br>";
echo $bike->forward() . "<br>";
echo $car1->forward() . "<br>";
echo $car1->brake() . "<br>";

$car1->setCurrentSpeed(130);
echo $car1->brake();






