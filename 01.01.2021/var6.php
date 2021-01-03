<?php
$num = 3;

switch ($num) {
    case 0:
        $str = "ноль";
        break;
    case 1:
        $str = "один";
        break;
    case 2:
        $str = "два";
        break;
    case 3:
        $str = "три";
        break;

    default:
        $str = "no";
        break;
}
echo $str;
