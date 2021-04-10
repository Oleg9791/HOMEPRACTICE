<?php
// Написать класс окружность с методом нахождения его площади и периметра

class Circle
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

    public function square()
    {
        return 4 * $this->a ** 2 * pi();
    }
}

class CircleOne extends Circle
{
    public function perimeter()
    {
        return 2 * $this->a * pi();
    }
}


