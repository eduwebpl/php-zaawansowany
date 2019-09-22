<?php

namespace Eduweb\Game;

class Weather
{
    private $current = 'shining';

    public function __toString() : string
    {
        return "Current weather: {$this->current}";
    }
}