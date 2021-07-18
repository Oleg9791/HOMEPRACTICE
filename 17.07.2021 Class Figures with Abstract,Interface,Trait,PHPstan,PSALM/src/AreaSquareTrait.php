<?php


namespace App;


trait AreaSquareTrait
{
    public function getAreaSquare(): float
    {
        return $this->a ** 2;
    }

}