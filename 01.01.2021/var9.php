<?php

$c = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];


foreach (str_split($_POST["c"]) as  $value) {
    echo " " . $c[$value];
}