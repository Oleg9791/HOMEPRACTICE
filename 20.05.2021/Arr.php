<?php
function arr($a, $b, $c, $d)
{
    return $a + $b + $c + $d;
}

$pat = [4, 5, 3];
echo arr(6, ...$pat) . "<br>";
echo arr(3, $pat[0], $pat[1], $pat[2]);