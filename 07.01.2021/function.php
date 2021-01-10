<?php
$a = 55;
$b = 29;
$c = 19;
$d = 61;
$e = 72;
$f = 83;
$g = 94;

function srav($a, $b)
{
    if ($a > $b) {
        $resultat = $a;
    } else {
        $resultat = $b;
    }
    return $resultat;
}

echo srav(srav(srav(srav(srav(srav($a, $b), $c), $d), $e), $f), $g);
