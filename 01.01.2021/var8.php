<?php
$c = str_split($_POST["c"]);

$arr = [
    0 => "ноль",
    1 => "один",
    2 => "два",
    3 => "три",
    4 => "четыре",
    5 => "пять",
    6 => "шесть",
    7 => "семь",
    8 => "восемь",
    9 => "девять",
    10 => "десять"
];

for ($i = 0; $i < count($c); $i++) {
    echo $arr[$c[$i]] . "<br>";
}