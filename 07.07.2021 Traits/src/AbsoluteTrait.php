<?php


namespace App;


trait AbsoluteTrait
{
    public function absolut(): float|int
    {
        return abs($this->a);
    }
}