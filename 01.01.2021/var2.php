<?php
$arr = [2, "two", 3, 4, 5, 6];

foreach ($arr as $key => $value) {
    echo "$key = $value<br>";
}
foreach ($arr as $value) {
    echo "$value<br>";
}
foreach ($arr as $key => $value) {
    echo "$key = $value<br>";
}
