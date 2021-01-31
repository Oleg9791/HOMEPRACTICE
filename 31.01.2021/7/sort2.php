<?php

$arr = [9, 7, 8, 6, 4, 5, 2, 3];

function sortka($arr1)
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
print_r(sortka($arr));
