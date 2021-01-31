<?php

$arr = [32, 23, 46, 9, 13, 3];
function sortirovka($arr1)
{
    for ($i = 0; $i < count($arr1); $i++) {

        for ($y = $i + 1; $y < count($arr1); $y++) {

            if ($arr1[$i] > $arr1[$y]) {

                $buf = $arr1[$i];
                $arr1[$i] = $arr1[$y];
                $arr1[$y] = $buf;
            }
        }
    }
    return $arr1;
}
print_r(sortirovka($arr));
