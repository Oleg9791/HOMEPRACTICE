<?php
// $a = "kbcde";
$a = $_POST["t"];
$b = "abc";
$c = substr($a, 0, 3);

if ($c == $b) {
    // echo preg_replace("abc", "www", $a);
    echo  preg_replace ("/abc/","www",$a,1);
} else {
    // echo str_pad($a, 10, "z");
    echo $a . "zzz";
}
