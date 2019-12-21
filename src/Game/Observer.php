<?php

namespace Eduweb\Game;

interface Observer
{
    public function notify(string $event) : void;
}
