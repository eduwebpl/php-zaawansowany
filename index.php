<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Cab;
use \Eduweb\Speed;

$speed = new Speed(1.5);

$cab = new Cab('Ford', 'Mondeo', $speed);

$car = new Car('Ford', 'Mondeo', $speed);

echo 'Car Color: ' . $car->getColor() . "\n";
echo 'Cab Color: ' . $cab->getColor() . "\n";
