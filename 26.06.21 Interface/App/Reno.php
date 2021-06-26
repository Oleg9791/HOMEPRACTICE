<?php


namespace App;


class Reno implements ICar
{
    protected string $name;
    protected float $maxSpeed;
    protected float $consumptionFuel;
    protected float $price;
    protected string $color;
    protected float $engineVolume;

    public function __construct($name, $maxSpeed, $consumptionFuel, $price, $color, $engineVolume)
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

    public function maxSpeed(): float
    {
        return $this->maxSpeed;
    }

    public function consumptionFuel(): float
    {
        return $this->consumptionFuel;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function color(): string
    {
        return $this->color;
    }

    public function engineVolume(): float
    {
        return $this->engineVolume;
    }

}