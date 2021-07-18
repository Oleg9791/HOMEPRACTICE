<?php


namespace App;


trait PerimeterTrapeziumTrait
{
    public function getPerimeterTrapezium(): float
    {
        return $this->a + $this->b + $this->c + $this->d;
    }

}