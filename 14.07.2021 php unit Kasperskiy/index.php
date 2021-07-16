<?php
include "vendor/autoload.php";

use App\Password;

$row = new Password();
echo $row->setPass("I know IT ")->checkMinSize();
