<?php


namespace App;


class Calc
{
    use TCalculator;

    public function sum(): float
    {
        return $this->a + $this->b;
    }

    public function mult(): float
    {
        return $this->a * $this->b;
    }

}