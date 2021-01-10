<?php
$arr1 = explode("+", str_replace(' ', '', $_POST["c"]));

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];

$num1 = array_search($arr1[0], $arr);

$num2 = array_search($arr1[1], $arr);

echo $_POST["c"] . "=" . $arr[$num1 + $num2];
