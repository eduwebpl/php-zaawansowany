<?php

namespace Eduweb\Game;

class Motor extends AbstractVehicle
{
    protected $type = 'Motor';

    protected function getName() : string
    {
        return $this->name;
    }
}