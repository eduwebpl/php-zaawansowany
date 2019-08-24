<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;

$car = new Car('Ford', 'Mondeo');

var_dump($car);

$car->drive();
