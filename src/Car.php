<?php

namespace Eduweb;

class Car
{
    protected $make = '';
    protected $model = '';
    protected $speed;

    public function __construct(string $make, string $model, Speed $speed)
    {
        $this->make = $make;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function slowDown() : Speed
    {
        return $this->getSpeed()->slowDown();
    }

    public function getSpeed() : Speed
    {
        return $this->speed;
    }

    public function drive() : void
    {
        echo "\nDriving";
    }
}