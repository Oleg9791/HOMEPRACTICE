<?php
include "vendor/autoload.php";

use App\AdvertisingGeneration;

use App\Mercedes;
use App\Reno;

$mercedes = new Mercedes("Мерседес", 210, 7.8, 58000, "черный", 2.2);
$reno = new \App\Reno("Рено", 210, 7.8, 15000, "зеленый", 1.6);
$lada = new \App\Lada("Лада", 180, 9.8, 10000, "красный", 1.6);
$opel = new \App\Opel("Рено", 230, 7.9, 18000, "синий", 1.8);
$bmw = new \App\Bmw("Рено", 310, 4.8, 65000, "белый", 3.5);
$audi = new \App\Audi("Рено", 300, 5.6, 55000, "серебристый", 2.8);

$advertising = new AdvertisingGeneration($mercedes);
$advertising->getAdvertising();

$advertising = new AdvertisingGeneration($reno);
$advertising->getAdvertising();

$advertising = new AdvertisingGeneration($lada);
$advertising->getAdvertising();

$advertising = new AdvertisingGeneration($opel);
$advertising->getAdvertising();

$advertising = new AdvertisingGeneration($bmw);
$advertising->getAdvertising();

$advertising = new AdvertisingGeneration($audi);
$advertising->getAdvertising();


