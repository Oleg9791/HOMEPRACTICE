<?php

$data = file("opros.txt");
// print_r($_POST);


$answer = $_POST["a"];
// echo $answer;
$data[$answer] = ($data[$answer] + 1) . "\n";
print_r($data);

// print_r($_POST);
$saveData = $data[0] . $data[1] . $data[2] . $data[3];
$fp = fopen("opros.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);

