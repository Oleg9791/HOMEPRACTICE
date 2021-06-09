<?php
include "vendor/autoload.php";

use Classes\Plane;


$plane = new Plane(300, 225, 65000, 20);
echo $plane->freePlace() . "<br><br>";
echo $plane->range();



