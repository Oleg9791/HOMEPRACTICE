<?php


namespace App;


trait PerimeterTriangleTrait
{
    public function getPerimeterTriangle(): float
    {
        return $this->a + $this->b + $this->c;
    }

}