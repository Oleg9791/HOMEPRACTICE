<?php


namespace App;


abstract class General
{
//    public function __construct(float $a)
//    {
//        $this->setA($a);
//        $this->setB($b);
//        $this->setC($c);
//        $this->setD($d);
//    }

    protected float $a;

    /**
     * @param float $a
     * @return $this
     */
    public function setA(float $a): static
    {
        $this->a = $a;
        return $this;
    }

    protected float $b;

    /**
     * @param float $b
     * @return $this
     */
    public function setB(float $b): static
    {
        $this->b = $b;
        return $this;
    }

    protected float $c;

    /**
     * @param float $c
     * @return $this
     */
    public function setC(float $c): static
    {
        $this->c = $c;
        return $this;
    }

    protected float $d;

    /**
     * @param float $d
     * @return $this
     */
    public function setD(float $d): static
    {
        $this->d = $d;
        return $this;
    }

}