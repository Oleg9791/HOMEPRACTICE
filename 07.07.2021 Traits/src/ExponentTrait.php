<?php


namespace App;


trait ExponentTrait
{
    public function exp(): float
    {
        return $this->a ** 2;
    }
}