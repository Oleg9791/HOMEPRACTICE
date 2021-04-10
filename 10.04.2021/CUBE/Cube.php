<?php
// Написать класс куба с методом нахождения его площади и периметра

class Cube
{
    protected float $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

    public function square(): float
    {
        return 6 * $this->a ** 2;
    }
}

class CubeOne extends Cube
{
    public function perimeter(): float
    {
        return 12 * $this->a;
    }
}


