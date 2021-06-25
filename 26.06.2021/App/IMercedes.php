<?php

namespace App;

interface IMercedes
{
    public function name(): string;

    public function maxSpeed(): int;

    public function consumptionFuel(): float;

    public function color(): string;

    public function price(): float;

    public function engineVolume(): float;
}