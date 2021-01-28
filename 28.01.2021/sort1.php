<?php

$arr = [8, 5, 7, 3, 6];
function insert($array)
{
    for ($i = 1; $i < count($array); $i++) {

        $buf = $array[$i];
        for ($y = $i - 1; $y >= 0 and  $array[$y] > $buf; $y--) {
            $array[$y + 1] = $array[$y];
        }
        $array[$y + 1] = $buf;
        // print_r($array[$y+1]);
    }
    return $array;

}
print_r(insert($arr));
