<?php
$f = $_POST["bb"];
$ff = 1;

for ($i = 1; $i < $f; $i++) {
    $ff = $ff * ($i + 1);
}
echo $ff;
