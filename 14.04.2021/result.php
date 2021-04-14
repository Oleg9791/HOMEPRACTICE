<?php
include_once "Table.php";

include_once "Decimetre.php";

include_once "Meter.php";

include_once "Inch.php";


$priceOne = new Table($_POST['square'], $_POST['cylinder']);

if ($_POST['magnitude'] == "priceCm") {

    echo $priceOne->{$_POST['magnitude']}() . " USD - cm";
}
$priceTwo = new Decimetre($_POST['square'], $_POST['cylinder']);
if ($_POST['magnitude'] == "priceDm") {
    echo $priceTwo->{$_POST['magnitude']}() . " USD - dez";
}

$priceTree = new Meter($_POST['square'], $_POST['cylinder']);
if ($_POST['magnitude'] == "priceM") {
    echo $priceTree->{$_POST['magnitude']}() . " USD - metre";
}

$priceFour = new Inch($_POST['square'], $_POST['cylinder']);
if ($_POST['magnitude'] == "priceInch") {
    echo $priceFour->{$_POST['magnitude']}() . " USD - inch";
}
