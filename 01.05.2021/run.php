<?php
include "autoload.php";
$list = new Lists(['Иванов', 'Петров', 'Сидоров']);

echo $list
    ->setType("a")
    ->setTagName("ol")
//    ->setList(['Lisa', 'Kat', 'Roma'])
    ->html();

echo $list
    ->setTagName("ol")
    ->setType("A")
    ->html();

echo $list
    ->setTagName("ol")
    ->setType("1")
    ->html();

echo $list
    ->setTagName("ol")
    ->setType("I")
    ->html();

echo $list
    ->setTagName("ol")
    ->setType("i")
    ->html();