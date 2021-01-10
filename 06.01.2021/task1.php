<?php

// $a = str_replace("abc", "www", $_POST["t"]);
// echo $a;






// $arr = str_split($a);

// print_r($arr);

// $a = ("abcdjfgrurj");

// $b = str_split($a);

// $arr = ["a", "b", "c"];


// if ($b[0] == "a") {
//     $b[0] = str_replace("a", "w", $b);
// }
// echo $b;

// elseif ($value[1] == $arr[1]) {
//     str_replace("b", "w", $value);
// } elseif ($value[2] == $arr[2]) {
//     str_replace("b", "w", $value);c
// }

// echo $c;
// elseif ($b[1] == $arr[1]) {
//     $d = str_replace("b", "w", $b);
// }

// echo $c . $d;
// // echo $d;




$a = ("obcde");
$arr = str_split($a);
$arr1 = ["a", "b", "c"];
for ($i = 0; $i < count($arr1); $i++) {
    if ($arr[$i] == $arr1[$i]) {
        $new = str_replace($arr[$i], "w", $arr);
    }
    echo $new[$i];
}
if ($arr[$i] !== $arr1[$i]) {
    echo str_pad($arr[$i], 9, "z");
}
