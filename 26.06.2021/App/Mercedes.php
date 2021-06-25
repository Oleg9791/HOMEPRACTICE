<?php

namespace App;

class Mercedes implements IMercedes
{
    protected string $name;
    protected int $maxSpeed;
    protected float $consumptionFuel;
    protected string $color;
    protected float $price;
    protected float $engineVolume;

    public function __construct($name, $maxSpeed, $consumptionFuel, $color, $price, $engineVolume)
    {
        $this->name = $name;
        $this->maxSpeed = $maxSpeed;
        $this->consumptionFuel = $consumptionFuel;
        $this->color = $color;
        $this->price = $price;
        $this->engineVolume = $engineVolume;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function maxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function consumptionFuel(): float
    {
        return $this->consumptionFuel;
    }

    public function color(): string
    {
        return $this->color;
    }
    public function price(): float
    {
        return $this->price;
    }
    public function engineVolume(): float
    {
        return $this->engineVolume;
    }

}