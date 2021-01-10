<?php
$c = str_split($_POST["c"]);

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];

foreach ($c as  $value) {
    if (is_numeric($value)) {
        echo " " . $arr[$value];
    } else {
        echo $value;
    }
}
