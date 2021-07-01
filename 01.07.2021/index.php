<?php
include "vendor/autoload.php";

use App\Calc;
use App\Calc1;

$calc = new Calc(3, 5);
$calc1 = new Calc1(6, 8);
echo $calc->sum()."<br>";
echo $calc1->div();

