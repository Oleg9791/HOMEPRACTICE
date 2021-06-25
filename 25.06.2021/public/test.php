<?php

include "../vendor/autoload.php";

use Classes\Palindrom;

$palindrom = new Palindrom();
echo $palindrom->setStr("Madams")->checkPolindrom();



