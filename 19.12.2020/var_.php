<?php
$f = $_POST["a"];
$a = 0;
$b = 1;

echo $a . ","   . $b . " ";
for ($i = 1; $i <= $f - 2; $i++) {
    $c = $a + $b;
    echo $c . ",";
    $a = $b;
    $b = $c;
}
echo "<br\n>";

$a = 0;
$b = 1;
echo $a . "," . $b . ",";
$i = 1;
while ($i <= $f - 2) {
    $c = $a + $b;
    echo $c . ",";
    $a = $b;
    $b = $c;
    $i = $i + 1;
}
echo "<br\n>";

$a = 0;
$b = 1;
echo $a . "," . $b . ",";
$i = 1;
do {
    $c = $a + $b;
    echo $c . ",";
    $a = $b;
    $b = $c;
    $i = $i + 1;
} while ($i <= $f-2);
