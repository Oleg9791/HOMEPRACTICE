<?php
$data = $_POST["a"];

$a = explode(".", file_get_contents("opros.txt"));
$a[$data]++;
file_put_contents("opros.txt", implode(".", $a));
print_r($a);
