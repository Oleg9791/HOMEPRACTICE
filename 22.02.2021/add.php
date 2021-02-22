<?php
include "function.php";
$data = json_decode(file_get_contents("data.json"));
$data[] = ["msg" => $_POST["msg"], "name" => $_POST["name"], "time" => date("d-M-Y (l) H-i-s")];
file_put_contents("data.json", json_encode($data));
header("Location: main.php");