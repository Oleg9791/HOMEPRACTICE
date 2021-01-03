<?php
$c = $_POST["c"];
$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
$arr1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

if (is_int($c) < count($arr)) {


    switch ($c) {
        case $str = $arr1[0]:
            $arr[0];
            continue;
        case $str = "один":
            $arr[1];
            continue;
        case $str = "два":
            $arr[2];
            continue;
        case  $str = "три":
            $arr[3];
            continue;
        case $str = "четыре":
            $arr[4];
            continue;
        case $str = "пять":
            $arr[5];
            continue;
        case  $str = "шесть":
            $arr[6];
            continue;
        case $str = "семь":
            $arr[7];
            continue;
        case $str = "восемь":
            $arr[8];
            continue;
        case  $str = "девять":
            $arr[9];
            continue;

        default:
            echo " ";
            break;
    }
}
echo $arr[0];
