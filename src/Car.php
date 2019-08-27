<?php

namespace Eduweb;

class Car
{
    protected $make = '';
    protected $model = '';
    protected $speed = 0.0;

    public function __construct(string $make, string $model, Speed $speed)
    {
        $this->make = $make;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function setSpeed(float $speed) : void
    {
        if ($speed < 0) {
            return;
        }

        $this->speed = $speed;
    }

    public function getSpeed() : float{
        return $this->speed;
    }

    public function drive() : void
    {
        echo "\nDriving";
    }
}