<?php


namespace App;


class Calc1
{
    use TCalculator;

    public function dif(): float
    {
        return $this->a - $this->b;
    }

    public function div(): float
    {
        return $this->a / $this->b;
    }


}