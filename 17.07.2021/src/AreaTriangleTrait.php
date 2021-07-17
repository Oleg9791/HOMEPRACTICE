<?php


namespace App;


trait AreaTriangleTrait
{
    public function getAreaTriangle(): float
    {
        return ($this->a * $this->h) / 2;
    }

}