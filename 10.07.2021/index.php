<?php
include "vendor/autoload.php";

use App\Row;

$row = new Row();
echo $row->setLen("i, want! to. programming?")->getSigns();
