<?php

spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});

$ol = new Ol();
echo $ol
    ->setArr(["Иванов", "Петров", "Сидоров"])
    ->html();

echo "<br>";

$ol = new Ul();
echo $ol
    ->setArr(["Иванов", "Петров", "Сидоров"])
    ->html();

echo "<br>";

$tab = new Table();
echo $tab
    ->setArr(["Иванов", "Петров", "Сидоров"])
    ->
    html();
