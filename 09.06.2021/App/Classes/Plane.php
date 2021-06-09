<?php

namespace Classes;
class Plane
{
    protected int $placeCount;
    protected int $passengerCount;
    protected float $fuelSupply;
    protected float $consumptionFuel;

    public function __construct($placeCount, $passengerCount, $fuelSupply, $consumptionFuel)
    {
        $this->setPlaceCount($placeCount);
        $this->setPassengerCount($passengerCount);
        $this->setFuelSupply($fuelSupply);
        $this->setConsumptionFuel($consumptionFuel);
    }

    /**
     * @param int $placeCount
     * @return $this
     */
    public function setPlaceCount(int $placeCount): static
    {
        $this->placeCount = $placeCount;
        return $this;
    }

    /**
     * @param int $passengerCount
     */
    public function setPassengerCount(int $passengerCount): static
    {
        $this->passengerCount = $passengerCount;
        return $this;

    }

    /**
     * @param float $fuelSupply
     */
    public function setFuelSupply(float $fuelSupply): static
    {
        $this->fuelSupply = $fuelSupply;
        return $this;

    }

    /**
     * @param float $consumptionFuel
     */
    public function setConsumptionFuel(float $consumptionFuel): static
    {
        $this->consumptionFuel = $consumptionFuel;
        return $this;

    }

    public function range(): float|int
    {
        return $this->fuelSupply / $this->consumptionFuel;
    }

    public function freePlace(): int
    {
        return $this->placeCount - $this->passengerCount;
    }

}