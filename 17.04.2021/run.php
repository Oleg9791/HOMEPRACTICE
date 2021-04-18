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
    ->setBorder(1)
    ->setInnerText("tr")
    ->setData([
        ['Петя', 'Вася', 'Ира'],
        ['Вася', 'Ира', 'Петя'],
        ['Ира', 'Лена', 'Вика'],
        ['Лена', 'Вася', 'Ира'],
        ['Вика', 'Ира', 'Лена'],
        ['Оля', 'Лена', 'Вика']
    ])
    ->tab();

echo "<br>";

echo $tb
    ->setBorder(1)
    ->setInnerText("tr")
    ->setData([1, 2, 3, 4, 5, 6, 7, 8])
    ->tab1();
echo $tb
    ->setBorder(1)
    ->setInnerText("tr")
    ->setData([1, 2, 3, 4, 5, 6, 7, 8])
    ->tab1();

echo $tb
    ->setBorder(1)
    ->setInnerText("tr")
    ->setData([1, 2, 3, 4, 5, 6, 7, 8])
    ->tab1();

