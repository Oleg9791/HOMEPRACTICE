<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// print_r($arr) . "<br\n>";

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}
foreach ($arr as  $value) {
    echo $value . "<br>";
}
