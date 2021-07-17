<?php


namespace App;


trait AreaRhombusTrait
{
    public function getAreaRhombus(): float
    {
        return $this->a * $this->h;
    }

}