<?php
// Написать класс равнобедренной трапеции с методом нахождения ее площади и периметра

class Trapezoid
{
    protected float $a;
    protected float $b;
    protected float $c;

    public function __construct($a, $b, $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);

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

    /**
     * @param float $b
     */
    public function setB(float $b)
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }

    /**
     * @param float $c
     */
    public function setC(float $c)
    {
        if ($c > 0) {
            $this->c = $c;
        }
    }

    public function square()
    {
        return $this->a + $this->b / 2 * sqrt($this->c ** 2 - ($this->a - $this->b) ** 2 / 4);
    }

    public function perimeter()
    {
        return 2 * $this->c + $this->a + $this->b;
    }


}

//class TrapezoidOne extends Trapezoid
//{
//    public function perimeter()
//    {
//        return 2 * $this->c + $this->a + $this->b;
//    }
//}


