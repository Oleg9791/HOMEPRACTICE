<?php
$a = "623123";
$a1 = str_split($a);
print_r($a1);
$r = $a1[0] + $a1[1] + $a1[2];
$d = $a1[3] + $a1[4] + $a1[5];
// $с = 0;
// $b = 0;

// for ($i = 0; $i < 3; $i++) {
//     $с = $с + $a1[$i];
//     echo $c;
// }

// for ($i = 3; $i < 6; $i++) {
//     $b = $b + $a1[$i];
//     echo $b;
// }
// echo "<br>";
// // echo $c . " " . $b;
if ($r == $d) {
    echo "да";
} else {
    echo "нет";
}
