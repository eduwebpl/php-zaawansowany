<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Car;

$car = new Car();
$car->make = 'Ford';
$car->model = 'Mondeo';

var_dump($car);

$car->drive();
