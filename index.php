<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Eduweb\Game\Race;
use \Eduweb\Game\Weather;

$weather = new Weather();

$race = new Race($weather);
$race->run();
