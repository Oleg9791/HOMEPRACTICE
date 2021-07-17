<?php


namespace App;


abstract class General
{
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

//    protected float $h;
//
//    /**
//     * @param float $h
//     * @return $this
//     */
//    public function setH(float $h): static
//    {
//        $this->h = $h;
//        return $this;
//
//    }
}