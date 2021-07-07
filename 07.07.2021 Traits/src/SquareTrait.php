<?php


namespace App;


trait SquareTrait
{
    public function square(): float
    {
        return sqrt($this->a);
    }
}