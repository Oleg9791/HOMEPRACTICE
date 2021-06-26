<?php


namespace App;


class AdvertisingGeneration
{
    protected ICar $nameMachine;

    public function __construct(ICar $nameMachine)
    {
        $this->nameMachine = $nameMachine;
    }

    public function getAdvertising()
    {
        echo "Продается машина - {$this->nameMachine->name()},
        максимальная скорость - {$this->nameMachine->maxSpeed()},
        расход топлива - {$this->nameMachine->consumptionFuel()},
        цена - {$this->nameMachine->price()},
        цвет - {$this->nameMachine->color()},
        объем двигателя - {$this->nameMachine->engineVolume()}.<br><br>";
    }

}