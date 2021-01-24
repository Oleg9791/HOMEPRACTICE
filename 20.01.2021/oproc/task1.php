<?php

$data = $_POST["a"];

$a = explode(".", file_get_contents("task1.txt"));

$a[$data]++;

file_put_contents("task1.txt", implode(".", $a));

print_r($a);
