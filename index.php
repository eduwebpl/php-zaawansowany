<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Cab;
use \Eduweb\Speed;

$speed = new Speed(1.5);

$cab = new Cab('Ford', 'Mondeo', $speed);

$car = new Car('Ford', 'Mondeo', $speed);

$cab->drive();
$car->drive();

var_dump(Cab::TEST);
var_dump(Car::TEST);


//echo 'Color: ' . $car->getColor() . "\n";
//
//echo 'Speed: ' . $car->getSpeed();
