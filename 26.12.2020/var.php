<?php
$q = [$_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"], $_POST["q6"], $_POST["q7"]];
// $a = [4, 27, 56, 64, 63, 49, 30];
// $x = 0;
// $y = 0;
// for ($i = 0; $i <= 7; $i++) {
//     if ($q[$i] == $a[$i]) {
//         $x = $x + 1;
//     } else {
//         $y = $y + 1;
//     }
// }
// $q1 = $_POST["q1"];
// $q2 = $_POST["q2"];
// $q3 = $_POST["q3"];
// $q4 = $_POST["q4"];
// $q5 = $_POST["q5"];
// $q6 = $_POST["q6"];
// $q7 = $_POST["q7"];
// $i = 0;




// if ($_POST["q1"] == 4) {
//     $i++;
// }
// if ($_POST["q2"] == 21) {
//     $i++;
// }
// if ($_POST["q3"] == 56) {
//     $i++;
// }
// if ($_POST["q4"] == 64) {
//     $i++;
// }
// if ($_POST["q5"] == 63) {
//     $i++;
// }
// if ($_POST["q6"] == 49) {
//     $i++;
// }
// if ($_POST["q7"] == 30) {
//     $i++;
// }

// $i = ($_POST["q1"] == 4);
//     + ($_POST["q2"] == 21)
//     + ($_POST["q3"] == 56)
//     + ($_POST["q4"] == 64)
//     + ($_POST["q5"] == 63)
//     + ($_POST["q6"] == 49)
//     + ($_POST["q7"] == 30);

$i += ($_POST["q1"] == 4);
$i += ($_POST["q2"] == 21);
$i += ($_POST["q3"] == 56);
$i += ($_POST["q4"] == 64);
$i += ($_POST["q5"] == 63);
$i += ($_POST["q6"] == 49);
$i += ($_POST["q7"] == 30);


if ($i >= 5) {
    echo "Кол-во правильных  " . "<br>" . "Успех";
} else {
    echo "Не сдан";
}