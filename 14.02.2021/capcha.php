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
<b> введите число <?php $random = "1 5 7";

    echo $random;
    ?> через пробел прописью</b> <br>
<form action="?" method="post">
    <input type="text" name="t">
    <input type="submit" value="ok">

</form>
</body>
</html>
<?php
$data = $_POST["t"];

$inputNumber = preg_replace(
    [
        "/ноль/",
        "/один/",
        "/два/",
        "/три/",
        "/четыре/",
        "/пять/",
        "/шесть/",
        "/семь/",
        "/восемь/",
        "/девять/"
    ],
    [
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9
    ],
    $data
);
//echo $inputNumber . "<br>";
//echo $random;

if ($inputNumber == $random) {
    echo "ok";
} else {
    echo "error";
}