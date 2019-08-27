<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;

$car = new Car('Ford', 'Mondeo');
$car->setSpeed(1.5);

var_dump($car);
var_dump('Speed:', $car->getSpeed() * 2);

$car->drive();
