<?php
$a = explode("+", str_replace(" ", "", $_POST["c"]));
// $a="два+три";
$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];

$a1 = array_search($a[0], $arr, true);
$a2 = array_search($a[1], $arr, true);
echo $sum = $arr[$a1 + $a2];
