<?php

namespace Eduweb\Game;

class Car extends AbstractVehicle
{
    protected function getName() : string {
        return $this->name;
    }
}