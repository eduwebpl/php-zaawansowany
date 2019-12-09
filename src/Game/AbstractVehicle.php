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

    public function move() : void
    {
        $this->preMove();

        echo "\n Moving {$this->getType()} ({$this->getName()}) by {$this->distance}";

        $this->postMove();
    }

    protected function getType() : string
    {
        return $this->type;
    }

    protected function postMove() : void { }

    protected function preMove() : void { }

    abstract protected function getName() : string;
}