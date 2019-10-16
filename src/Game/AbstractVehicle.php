<?php

namespace Eduweb\Game;

abstract class AbstractVehicle
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function move()
    {
        echo "\n Moving Car ({$this->name})";
    }
}