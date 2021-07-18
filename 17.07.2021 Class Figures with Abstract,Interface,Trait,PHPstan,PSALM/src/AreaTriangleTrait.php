<?php


namespace App;


trait AreaTriangleTrait
{
    public function getAreaTriangle(): float
    {
        return ($this->a * $this->b) / 2;
    }

}