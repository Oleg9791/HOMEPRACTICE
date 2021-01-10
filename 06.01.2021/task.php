<?php
$a = $_POST["t"];

// $a = ("sdffgwe");

$arr = str_split($a);

foreach ($arr as  $value) {

    $dlina = $dlina + 1;
}

if ($dlina > 10) {
    echo $arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5];
} else {
    echo str_pad($a, 12, "o");
}
