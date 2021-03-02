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
<form action="?" method="post">
    <input type="submit" name="num0" value="0">
    <input type="submit" name="num1" value="1">
    <input type="submit" name="num2" value="2">
    <input type="submit" name="num3" value="3">
    <input type="submit" name="num4" value="4">
    <input type="submit" name="num5" value="5">
    <input type="submit" name="num6" value="6">
    <input type="submit" name="num7" value="7">
    <input type="submit" name="num8" value="8">
    <input type="submit" name="num9" value="9">
    <input type="submit" name="calc" value="=">
    <input type="submit" name="reset" value="reset">
    <input type="submit" name="plus" value="+">
    <input type="submit" name="minus" value="-">
    <input type="submit" name="multiply" value="*">
    <input type="submit" name="division" value="/">

</form>
<?php
if (!empty($_POST["num0"])) {
    $num0 = $_POST["num0"];
    file_put_contents("log.txt", $num0, FILE_APPEND);

} elseif (!empty($_POST["num1"])) {
    $num1 = $_POST["num1"];
    file_put_contents("log.txt", $num1, FILE_APPEND);
} elseif (!empty($_POST["num2"])) {
    $num2 = $_POST["num2"];
    file_put_contents("log.txt", $num2, FILE_APPEND);
} elseif (!empty($_POST["num3"])) {
    $num3 = $_POST["num3"];
    file_put_contents("log.txt", $num3, FILE_APPEND);
} elseif (!empty($_POST["num4"])) {
    $num4 = $_POST["num4"];
    file_put_contents("log.txt", $num4, FILE_APPEND);
} elseif (!empty($_POST["num5"])) {
    $num5 = $_POST["num5"];
    file_put_contents("log.txt", $num5, FILE_APPEND);
} elseif (!empty($_POST["num6"])) {
    $num6 = $_POST["num6"];
    file_put_contents("log.txt", $num6, FILE_APPEND);
} elseif (!empty($_POST["num7"])) {
    $num7 = $_POST["num7"];
    file_put_contents("log.txt", $num7, FILE_APPEND);
} elseif (!empty($_POST["num8"])) {
    $num8 = $_POST["num8"];
    file_put_contents("log.txt", $num8, FILE_APPEND);
} elseif (!empty($_POST["num9"])) {
    $num9 = $_POST["num9"];
    file_put_contents("log.txt", $num9, FILE_APPEND);
} elseif (!empty($_POST["plus"])) {
    $plus = $_POST["plus"];
    file_put_contents("log.txt", " " . $plus . " ", FILE_APPEND);
} elseif (!empty($_POST["minus"])) {
    $minus = $_POST["minus"];
    file_put_contents("log.txt", " " . $minus . " ", FILE_APPEND);
} elseif (!empty($_POST["multiply"])) {
    $multiply = $_POST["multiply"];
    file_put_contents("log.txt", " " . $multiply . " ", FILE_APPEND);
} elseif (!empty($_POST["division"])) {
    $division = $_POST["division"];
    file_put_contents("log.txt", " " . $division . " ", FILE_APPEND);
} elseif (!empty($_POST["reset"])) {
    file_put_contents("log.txt", "");
} elseif (!empty($_POST["calc"])) {
    echo result();
}

function result()
{


    $num = explode(" ", file_get_contents("log.txt"));

    if ($num[1] == "+") {
        echo "Сумма = " .($num[0] + $num[2]);
        file_put_contents("log.txt", "");

    }

    return $num;
}

echo file_get_contents("log.txt");


?>
</body>
</html>

