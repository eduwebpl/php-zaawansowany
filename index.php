<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;
use \Eduweb\Game\VehicleBuilder;
use \Eduweb\Game\ShinyCar;

$builder = new VehicleBuilder();

$weather = new Weather();

$race = new Race($weather);

$builder->setType(VehicleBuilder::CAR);
$builder->setName('abc');

$race->addVehicle(new ShinyCar($builder->build()));

$builder->setName('cde');
$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::TRUCK);
$builder->setName('ghi');

$race->addVehicle($builder->build());

$builder->setType(VehicleBuilder::MOTOR);
$builder->setName('efg');

$race->addVehicle($builder->build());

$race->run();
