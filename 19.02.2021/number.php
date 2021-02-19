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
//print_r($_POST);
$number = $_POST["number"];
$userNumber = $_POST["userNumber"];
$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
//echo $number[1];
if (preg_match("/.*(" . $arr[$number[0]] . ")\s+(" . $arr[$number[1]] . ").*/iu", $userNumber)) {

    echo "Вы не робот, регистрация успешно пройдена";
} else {
    echo "Не верно, повторите попытку";
}
?>
</body>
</html>

