<?php
$w = $_POST["c"];
$num = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];




foreach (str_split($w) as  $value) {
   echo $num[$value];
}

echo " " . $w;

