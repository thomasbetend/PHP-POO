<?php
require_once('Car.php');
require_once('Bicycle.php');
require_once('Skateboard.php');

$tesla = new Car('red', 5, 'electric');
$peugeot208CC = new Car('blue', 4, 'gasoil');
$triporteur = new Bicycle('grey', 4);
$longBoard = new Skateboard('black', 1);

$triporteur->setCurrentSpeed(10);

var_dump($longBoard);
var_dump($triporteur); 

var_dump($triporteur->switchOn());

var_dump($tesla->switchOn());






