<?php
$a = $_POST["a"];
$f = 1;
for ($i = 1; $i < $a; $i++) {
    $f = $f * ($i + 1);
}
echo $f;
