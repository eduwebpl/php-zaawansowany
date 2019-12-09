<?php

namespace Eduweb\Game;

class Motor extends AbstractVehicle
{
    protected $type = 'Motor';
    protected $maxSpeed = 250;

    protected function getName() : string
    {
        return $this->name;
    }

    protected function preMove() : void
    {
        $this->distance += $this->maxSpeed * rand(20, 100) / 100;
    }

}