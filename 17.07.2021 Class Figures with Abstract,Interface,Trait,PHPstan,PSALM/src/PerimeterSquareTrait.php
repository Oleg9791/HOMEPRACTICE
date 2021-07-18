<?php


namespace App;


trait PerimeterSquareTrait
{
    public function getPerimeterSquare(): float
    {
        return $this->a * 4;
    }

}