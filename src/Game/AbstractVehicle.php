<?php

namespace Eduweb\Game;

abstract class AbstractVehicle implements Vehicle
{
    protected $name;
    protected $type;
    protected $distance = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getDistance() : float
    {
        return $this->distance;
    }

    public function move() : void
    {
        $this->preMove();

        echo "\n Moving {$this->getType()} ({$this->getName()}) by {$this->distance}";

        $this->postMove();
    }

    public function getType() : string
    {
        return $this->type;
    }

    protected function postMove() : void { }

    protected function preMove() : void { }

    abstract public function getName() : string;
}