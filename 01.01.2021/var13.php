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
    default:
        $work = "no";
        break;
}
echo $work;
