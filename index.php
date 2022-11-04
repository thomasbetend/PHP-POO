<?php
require_once('MotorWay.php');
require_once('ResidentialWay.php');
require_once('PedestrianWay.php');
require_once('Car.php');
require_once('Bicycle.php');
require_once('Skateboard.php');

$tesla = new Car('red', 5, 'electric');
$peugeot208CC = new Car('blue', 4, 'gasoil');
$triporteur = new Bicycle('grey', 4);
$longBoard = new Skateboard('black', 1, 120);

$motorwaySun = new MotorWay(4, 130);
$residentialWaySeaView = new ResidentialWay(2, 50);
$pedestrianWayWoody = new PedestrianWay(1,10);

echo $motorwaySun->addVehicle($tesla) . '<br>';
echo $motorwaySun->addVehicle($peugeot208CC) . '<br>';
echo $motorwaySun->addVehicle($triporteur) . '<br>';

echo $residentialWaySeaView->addVehicle($triporteur) . '<br>';
echo $residentialWaySeaView->addVehicle($longBoard) . '<br>';

echo $pedestrianWayWoody->addVehicle($triporteur) . '<br>';
echo $pedestrianWayWoody->addVehicle($tesla) . '<br>';


var_dump($motorwaySun); 
var_dump($residentialWaySeaView); 
var_dump($pedestrianWayWoody);








/* $batmans = ['robin', 'batman', 'joker'];

function bat($array){

    foreach($array as $element){
        return $element;
    }

}

echo bat($batmans);
 */