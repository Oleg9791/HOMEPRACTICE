<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1> Calculator</h1><br>

<div class="container">
    <div class="row">
        <div class="col-sm" id="left">
            One of three columns
        </div>
        <div class="col-sm" id="center">

            <form action="?" method="post">
                <span>   <input type="submit" class="btn btn-primary" value="1" name="number1">
                <input type="submit" class="btn btn-primary" value="2" name="number2">
                <input type="submit" class="btn btn-primary" value="3" name="number3"></span><br>
                <span> <input type="submit" class="btn btn-primary" value="4" name="number4">
                <input type="submit" class="btn btn-primary" value="5" name="number5">
                <input type="submit" class="btn btn-primary" value="6" name="number6"></span><br>
                <span><input type="submit" class="btn btn-primary" value="7" name="number7">
                <input type="submit" class="btn btn-primary" value="8" name="number8">
                <input type="submit" class="btn btn-primary" value="9" name="number9"></span><br>
                <span> <input type="submit" class="btn btn-primary" value="0" name="number0">
                <input type="submit" class="btn btn-primary" value="-" name="minus">
                   <input type="submit" class="btn btn-primary" value="+" name="plus"></span><br>
                <span>  <input type="submit" class="btn btn-primary" value="*" name="multiply">
                <input type="submit" class="btn btn-primary" value="/" name="divide">
                  <input type="submit" class="btn btn-primary" value="="></span>

                <!--                <select name="operator">-->
                <!--                    <option value="plus">+</option>-->
                <!--                    <option value="minus">-</option>-->
                <!--                    <option value="umnogenie">*</option>-->
                <!--                    <option value="delenie">/</option>-->
                <!--                </select>-->
                <!--                <input type="text" name="number2">-->


            </form>
            <?php

            //            if (is_numeric($_POST["number1"]) and is_numeric($_POST["number1"])) {
            //
            //
            //                $number1 = $_POST["number1"];
            //                $number2 = $_POST["number2"];
            //                $operator = $_POST["operator"];
            //            } else {
            //                echo "Введите число";
            //            }
            //            if ($operator == "plus") {
            //                echo $result = $number1 + $number2;
            //            } elseif ($operator == "minus") {
            //                echo $result = $number1 - $number2;
            //
            //            } elseif ($operator == "umnogenie") {
            //                echo $result = $number1 * $number2;
            //
            //            } elseif ($operator == "delenie") {
            //                echo $result = round($number1 / $number2, 2);
            //
            //            }

            if (!empty($_POST["number0"])) {
                $zero = $_POST["number0"];
//                echo $zero;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $zero, FILE_APPEND);

            } elseif (!empty($_POST["number1"])) {
                $one = $_POST["number1"];
//                echo $one;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $one, FILE_APPEND);

            } elseif (!empty($_POST["number2"])) {
                $two = $_POST["number2"];

//                echo $two;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $two, FILE_APPEND);


            } elseif (!empty($_POST["number3"])) {
                $three = $_POST["number3"];
//                echo $three;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $three, FILE_APPEND);

            } elseif (!empty($_POST["number4"])) {
                $four = $_POST["number4"];
//                echo $four;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $four, FILE_APPEND);


            } elseif (!empty($_POST["number5"])) {
                $five = $_POST["number5"];
//                echo $five;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $five, FILE_APPEND);


            } elseif (!empty($_POST["number6"])) {
                $six = $_POST["number6"];
//                echo $six;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $six, FILE_APPEND);


            } elseif (!empty($_POST["number7"])) {
                $seven = $_POST["number7"];
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $seven, FILE_APPEND);


            } elseif (!empty($_POST["number8"])) {
                $eight = $_POST["number8"];
//                echo $eight;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", $eight, FILE_APPEND);

            } elseif (!empty($_POST["number9"])) {
                $nine = $_POST["number9"];
//                echo $nine;
                file_get_contents("number.txt");
                file_put_contents("number.txt", $nine, FILE_APPEND);

            } elseif (!empty($_POST["plus"])) {
                $plus = $_POST["plus"];
//                echo $plus;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", " " . $plus . " ", FILE_APPEND);


            } elseif (!empty($_POST["minus"])) {
                $minus = $_POST["minus"];
//                echo $minus;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", " " . $minus . " ", FILE_APPEND);

            } elseif (!empty($_POST["multiply"])) {
                $multiply = $_POST["multiply"];
//                echo $multiply;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", " " . $multiply . " ", FILE_APPEND);

            } elseif (!empty($_POST["divide"])) {
                $divide = $_POST["divide"];
//                echo $divide;
                $data = file_get_contents("number.txt");
                file_put_contents("number.txt", " " . $divide . " ", FILE_APPEND);

            }
            function result()
            {
                $num = explode(" ", file_get_contents("number.txt"));


                if ($num[1] == "+") {
                    echo "Пример : $num[0]$num[1]$num[2]<br>";
//                        print_r($num);

                    echo "Сумма  = " . ($num[0] + $num[2]);

                } elseif ($num[1] == "-") {
                    echo "Пример : $num[0]$num[1]$num[2]<br>";
                    echo "Разность  = " . ($num[0] - $num[2]);

                } elseif ($num[1] == "*") {
                    echo "Пример : $num[0]$num[1]$num[2]<br>";
                    echo "Произведение  = " . ($num[0] * $num[2]);

                } elseif ($num[1] == "/") {
                    echo "Пример : $num[0]$num[1]$num[2]<br>";
                    echo "Частное  = " . round(($num[0] / $num[2]), 2);

                }


                return $num;


            }

            result();

            ?>
        </div>
        <div class="col-sm" id="right">
            One of three columns
        </div>
    </div>
</div>
</body>
</html>


