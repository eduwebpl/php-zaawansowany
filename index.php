<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;
use \Eduweb\Speed;

$speed = new Speed(1.5);

$car = new Car('Ford', 'Mondeo', $speed);

$car->test('a', 'b', 4);

echo 'Color: ' . $car->getColor() . "\n";

echo 'Speed: ' . $car->getSpeed();
