<?php
include "vendor/autoload.php";

use App\AdvertisingGeneration;

use App\Mercedes;
use App\Reno;

$mercedes = new Mercedes("Мерседес", 210, 7.8, 15000, "зеленый", 1.6);
$reno = new \App\Reno("Рено", 210, 7.8, 15000, "зеленый", 1.6);

$advertising = new AdvertisingGeneration($mercedes);
$advertising->getAdvertising();
$advertising = new AdvertisingGeneration($reno);
$advertising->getAdvertising();

