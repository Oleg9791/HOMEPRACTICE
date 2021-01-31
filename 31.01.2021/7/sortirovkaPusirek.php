<?php

$arr = [9, 7, 5, 4, 2];

function sortirovka($array)
{

    for ($i = 0; $i < count($array); $i++) {

        for ($y = $i + 1; $y < count($array); $y++) {
            if ($array[$i] > $array[$y]) {
                $buf = $array[$i];
                $array[$i] = $array[$y];
                $array[$y] = $buf;
            }
        }
    }
    return $array;
}
print_r(sortirovka($arr));
