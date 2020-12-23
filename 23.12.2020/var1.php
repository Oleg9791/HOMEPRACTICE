<?php
$q = $_POST["a"];
$a = 0;
$b = 1;
$c = 0;
echo $a . ", " . $b . ", ";
for ($i = 0; $i <= $q - 2; $i++) {
    $c = $a + $b;
    echo $c . ", ";
    $a = $b;
    $b = $c;
}
