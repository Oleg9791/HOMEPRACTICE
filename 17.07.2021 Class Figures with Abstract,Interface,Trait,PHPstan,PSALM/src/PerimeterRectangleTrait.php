<?php


namespace App;


trait PerimeterRectangleTrait
{
    public function getPerimeterRectangle(): float
    {
        return ($this->a + $this->b) * 2;
    }

}