<?php

spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});

$ol = new Ol();
echo $ol
    ->setArr(["Helena", "Linda", "Kat"])
    ->html();

echo "<br>";

$ol = new Ul();
echo $ol
    ->setArr(["Helena", "Linda", "Kat"])
    ->html();

echo "<br>";

$tab = new Table();
echo $tab
    ->setArr(["Helena", "Linda", "Kat"])
    ->
    html();
