<?php

namespace Eduweb\Game;

class Motor extends AbstractVehicle
{
    protected $type = 'Motor';
    protected $maxSpeed = 250;

    public function getName() : string
    {
        return $this->name;
    }

    protected function preMove() : void
    {
        $this->distance += $this->maxSpeed * rand(20, 100) / 100;

        $weather = Weather::getInstance();
        if ($weather->isRaining()) {
            $this->distance -= 20;
        }
    }
}
