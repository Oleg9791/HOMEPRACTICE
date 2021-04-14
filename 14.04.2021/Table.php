<?php


class Table
{
    /**
     * @var float
     */
    protected float $a;
    /**
     * @var float
     */
    protected float $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * @param float $a
     */
    public function setA(float $a): void
    {
        if ($a > 0) {

            $this->a = $a;
        }
    }

    /**
     * @param float $b
     */
    public function setB(float $b): void
    {
        if ($b > 0) {

            $this->b = $b;
        }
    }

    public function priceCm(): float
    {
        return ($this->a + $this->b + 20);
    }
}

