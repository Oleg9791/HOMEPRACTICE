<?php


namespace App;


trait SinTrait
{
    public function sin(): float
    {
        return sin($this->a);
    }
}