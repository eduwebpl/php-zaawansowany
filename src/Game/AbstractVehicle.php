<?php

namespace Eduweb\Game;

abstract class AbstractVehicle implements Vehicle
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move() : void
    {
        echo "\n Moving Car ({$this->getName()})";
    }

    abstract protected function getName() : string;
}