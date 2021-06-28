<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "vendor/autoload.php";

use App\Weather;


//print_r($weather->getTemperature());
$arr = [
    "minsk" => "минск",
    "vitebsk" => "витебск",
    "gomel" => "гомель",
    "grodno" => "гродно",
    "mogilev" => "могилев"
];
?>
<form action="?" method="post">

    <select name="pogoda">
        <?php
        foreach ($arr as $key => $value) {

            echo "<option value='$key' " . ($_POST['pogoda'] == $key ? "selected" : "") . ">$value</option>";
        }
        ?>
    </select>

    <?php
    if (isset($_POST['pogoda'])) {
        echo (new Weather())->setCity($_POST['pogoda'])->getTemperature();
    }
    ?>
    <input type="submit" value="ok">
</form>

</body>
</html>






<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?php
//
//
//use App\Weather;
//
//include "vendor/autoload.php";
//
//$cities = [
//    "minsk" => "Минск",
//    "vitebsk" => "Витебск",
//    "gomel" => "Гомель",
//    "grodno" => "Гродно",
//    "mogilev" => "Могилев",
//    "brest" => "Брест",
//];
//?>
<!--<form action="?" method="post">-->
<!---->
<!--    <select name="city">-->
<!--        --><?php
//        foreach ($cities as $city => $str) {
//            echo "<option value='$city' " . ($_POST["city"] == $city ? "selected" : "") . ">$str</option>";
//        }
//        ?>
<!--    </select>-->
<!---->
<!--    --><?php
//    if (isset($_POST['city'])) {
//        echo (new Weather())->setCity($_POST['city'])->getTemperature();
//    }
//    ?>
<!--    <input type="submit" value="ok">-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->

