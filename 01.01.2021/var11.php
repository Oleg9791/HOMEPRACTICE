<?php
$c = $_POST["c"];

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

// foreach (str_split($c)   as  $value) {
//    if (isset($arr[$value])) {
//       echo  $arr[$value];
//    } elseif (isset($arr1[$value])) {
//       echo  $arr1[$value];
//    }
// }
$arr2 = [];
$arr2 = str_split($c);

foreach ($arr2 as $key => $value) {
   if ($value[$key] == $arr[$key]) {
      echo $arr[0];
   }
}
