<?php
$a = "abcdefg";
if (str_starts_with($a, "abc",)) {
    echo  str_replace("abc", "www", $a);
} else {
    echo $a . "zzz";
}
