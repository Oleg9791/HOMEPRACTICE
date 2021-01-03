<?php
$arr = [2, 4, 6, 7, 9, 4, 3];
$sum = 0;
for ($i = 0; $i < count($arr); $i++) {
    $sum = $sum + $arr[$i];
}
echo $sum;
echo "<br\n>";
$sum=0;
foreach ($arr as  $value) {
    $sum = $sum + $value;
}
echo $sum;
