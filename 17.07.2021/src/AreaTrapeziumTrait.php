<?php


namespace App;


trait AreaTrapeziumTrait
{

    public function getAreaTrapezium(): float
    {
        return ($this->a + $this->b) / 2 * $this->h;
    }

}