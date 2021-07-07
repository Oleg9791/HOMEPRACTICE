<?php

namespace App;

class Calc
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

    public function cos(): float
    {
        return cos($this->a);
    }
}