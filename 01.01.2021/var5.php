<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr as  $value) {
    if ($value == 6) {
        break;
    }
    echo $value;
}
echo "<br>";

foreach ($arr as  $value) {
    if ($value == 6) {
        continue;
    }
    echo $value;
}
