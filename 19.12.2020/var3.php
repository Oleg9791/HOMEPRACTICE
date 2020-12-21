<?php
$a = ['10', '20', '30', '50', '235', '3000'];

foreach ($a as $b) {
    if ($b[0] == 1 or $b[0] == 2 or $b[0] == 5) {
        echo $b . "<br>";
    }
}
echo "<br\n>";

$a = ["1", "2", "3", "4", "5", " 6", " 7", "8", " 9"];


// echo implode(' - ', $a);
foreach ($a as $b) {
    if ($b[0]==1) {
        echo "-".$b;
    }

        echo  $b."-";
   
    }

