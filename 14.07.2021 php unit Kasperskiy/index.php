<?php
include "vendor/autoload.php";

use App\Row;

$row = new Row();
echo $row->setStr("I know IT ")->getCountNum();
