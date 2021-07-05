<?php
include "vendor/autoload.php";

$txtTable = new \App\TxtTable("table.txt");
//print_r($txtTable->read());
//$txtTable->insert(["Name" => "Ira", "ZP" => 342]);
//$txtTable->update(2, ["Name" => "LERA", "ZP" => 999]);
//$txtTable->delete(1);


$jsn = new \App\JsonTable("table.json");
//print_r($jsn->read());
//$jsn->insert(["Name" => "LERA", "ZP" => 999]);
//$jsn->update(1, ["Name" => "Ira", "ZP" => 342]);
//$jsn->delete(1);


$phpTab = new \App\PhpTable("table.php");
$phpTab->read();

//$phpTab->insert(["FIO" => "OLEG", "ZP" => 999]);
//$phpTab->update(1,["Name" => "LERA", "ZP" => 777]);
$phpTab->delete(1);
