<?php


namespace App;


class Square implements IGetArea
{
    use TArea;

    public function area(): float
    {
        return $this->a ** 2;
    }

}