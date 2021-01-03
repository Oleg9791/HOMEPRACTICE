<?php
$w = $_POST["w"];

switch ($w) {
    case "ноль":
        $work = "serro";
        break;
    case "один":
        $work = "one";
        break;
    case "два":
        $work = "two";
        break;
    case "три":
        $work = "three";
        break;
    case "четыре":
        $work = "four";
        break;
    case "пять":
        $work = "five";
        break;


    default:
        $work = "no";
        break;
}
echo $work;
