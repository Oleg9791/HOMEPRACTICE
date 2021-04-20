<?php
include_once "Br.php";
include_once "Textarea.php";
include_once "Input.php";
include_once "Table.php";

$spas = new Br();
echo $spas->setInnerText("I want to study programming")->html();

$area = new Textarea();
echo $area
    ->setName("text")
    ->setRows(10)->setCols(20)
    ->setInnerText("Hello!I want to study programming!!!I want to study programming!!!")
    ->html();

echo "<br><br>";

$inp = new Input();
echo $inp
    ->setType("text")
    ->setValue("")
    ->setPlaceholder("payment")
    ->inp();

echo "<br><br>";

$tb = new Table();
echo $tb
    ->setStyle(" border: 1px solid red;")
    ->setData([
        ['Петя', 'Вася', 'Ира'],
        ['Вася', 'Ира', 'Петя'],
        ['Ира', 'Лена', 'Вика'],
        ['Лена', 'Вася', 'Ира'],
        ['Вика', 'Ира', 'Лена'],
        ['Оля', 'Лена', 'Вика']
    ])
    ->html();


echo $tb
    ->setData([
        ['Петя', 'Вася', 'Ира']
    ])
    ->html();
