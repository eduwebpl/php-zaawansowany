<?php

namespace Eduweb;

class Cab extends Car
{
    private $color = 'yellow';

    public function drive() : void
    {
        echo 'Driving Cab';
    }

    public function getColor() : string
    {
        return $this->color;
    }
}
