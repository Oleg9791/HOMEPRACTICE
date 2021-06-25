<?php


include "vendor/autoload.php";

use App\Advertisement;

//use App\$_POST[getCar];
print_r($_POST);
$row = "";
$row = $_POST['getCar'];
$mercedes = new App\."$row" ('Merc', 260, 6.5, 'black', 45000, 2.5);
$advertisement = new Advertisement($mercedes);
$advertisement->advertisingCar();


