<?php
include "vendor/autoload.php";

$txtTable = new \App\TxtTable("table.txt");
print_r($txtTable->read());

$txtTable->insert(["Name" => "Taras", "ZP" => 987]);

$txtTable->delete(2);

$txtTable->update(4, ["Name" => "ВАСЯ", "ZP" => 123]);


$jsn = new \App\JsonTable("table.json");

 print_r($jsn->read());

$jsn->insert(["Name" => "Taras", "ZP" => 987]);

$jsn->update(2, ["Name" => "Marat", "ZP" => 123]);