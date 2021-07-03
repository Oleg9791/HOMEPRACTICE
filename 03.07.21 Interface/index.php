<?php
include "vendor/autoload.php";
$table = new \App\TxtTable("table.txt");
print_r($table->read());
//$table->insert(["Name" => "Luda", "ZP" => 120]);
//$table->insert(["Name" => "Гена", "ZP" => 620]);
$table->delete(8);
$table->update(7, ["Name" => "Лена", "ZP" => 440]);
