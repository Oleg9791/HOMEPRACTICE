<?php


namespace App;


class Advertisement
{
    protected IMercedes $car;

    public function __construct(IMercedes $car)
    {
        $this->car = $car;
    }

    public function advertisingCar(): void
    {
        echo "Продается авто марки - {$this->car->name()},
     максимальная скорость - {$this->car->maxSpeed()},
     расход топлива - {$this->car->consumptionFuel()},
     цвет - {$this->car->color()},
     цена - {$this->car->price()},
     объем двигателя - {$this->car->engineVolume()}";
    }
}