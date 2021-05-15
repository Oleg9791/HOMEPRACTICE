<?php
include "autoload.php";

//use Oleg\Calc;
use Monika\Calculator as MonikaM;
$calc = new Oleg\Calc(4, 7);

echo $calc->sum();
echo "<br>";
echo $calc->mult();
echo "<br>";

$calculator = new MonikaM(9, 5);

echo $calculator->sub();
echo "<br>";
echo $calculator->div();