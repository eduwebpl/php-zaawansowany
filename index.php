<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Speed;

$speed = new Speed(1.5);

echo "\n" . $speed->getValue() . "\n";

$car = new Car('Ford', 'Mondeo', $speed);

echo 'Speed: ' . $car->getSpeed();
