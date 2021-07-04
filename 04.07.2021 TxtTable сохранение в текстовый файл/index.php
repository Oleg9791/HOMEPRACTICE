<?php
include "vendor/autoload.php";

$txtTable = new \App\TxtTable("table.txt");
print_r($txtTable->read());

//$txtTable->insert(["Name" => "Rita", "ZP" => 320]);
//$txtTable->insert(["Name" => "Tom", "ZP" => 876]);
//$txtTable->delete(4);
$txtTable->update(4, ["Name" => "Alisa", "ZP" => 432]);