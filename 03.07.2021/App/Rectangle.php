<?php


namespace App;


class Rectangle implements IGetArea
{

    use TArea;

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

    public function area(): float
    {
        return $this->a * $this->b;
    }


}