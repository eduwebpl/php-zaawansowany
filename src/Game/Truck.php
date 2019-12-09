<?php

namespace Eduweb\Game;

class Truck extends AbstractVehicle
{
    protected $type = 'Truck';
    protected $maxSpeed = 100;

    protected function getName() : string
    {
        return strtolower($this->name);
    }

    protected function preMove() : void
    {
        $this->distance += $this->maxSpeed * rand(80, 100) / 100;
    }
}