<?php


namespace App;


trait AreaRectangleTrait
{
    public function getAreaRectangle(): float
    {
        return $this->a * $this->b;
    }

}