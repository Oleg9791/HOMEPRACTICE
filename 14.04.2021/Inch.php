<?php


class Inch extends Table
{
    public function priceInch(): float
    {
        return ($this->a / 2.5 + $this->b*4 * 2.5 + 20);

    }
}