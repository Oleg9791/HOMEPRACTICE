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
    Введите имя <br>
    <input type="text" name="name"> <br>
    Введите фамилию <br>
    <input type="text" name="famil"> <br>
    Введите e-mail <br>
    <input type="text" name="email"> <br>
    Введите вашу соцсеть <br>
    <input type="text" name="soc"><br><br>
    Введите ваш телефон <br>
    <input type="text" name="tel"><br><br>
    <input type="submit" value="ok"><br><br>
</form>


<?php

$checkName = preg_match("/\w+/ui", $_POST["name"]);
$checkFamil = preg_match("/^\w+$/ui", $_POST["famil"]);
$checkEmail = preg_match("/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.\w{2,3}/", $_POST["email"]);
$checkSoc = preg_match("/https?:\/\/(\w+\.?)+\.\w{2,3}\/[a-zA-Z0-9-._~:\/?%#\[\]@!$&'()*+,;=]*/", $_POST["soc"]);
$phone = preg_replace("/[^0-9\+]/", "", $_POST["tel"]);
$checkTel = preg_match("/\^(\+375|80)212[2369]\d{5}|(\+375|80)(29|25|33|44)\d{7}/", $phone);

if ($checkName == false)
    echo "<span style='color:red' >Неккоректно введено имя</span><br>";
if ($checkFamil == false)
    echo "<span style='color:red' >Неккоректно введена фамилия</span><br>";
if ($checkEmail == false)
    echo "<span style='color:red' >Неккоректно введен email</span><br>";
if ($checkSoc == false)
    echo "<span style='color:red' >Неккоректно введен адрес страницы в соцсети </span><br>";
if ($checkTel == false)
    echo "<span style='color:#ff0000' >Неккоректно введен телефон</span><br> ";
if ($checkName==true && $checkFamil==true && $checkEmail==true && $checkSoc==true && $checkTel==true)
        echo "<span style='color:green' >Регистрация прошла успешно!!!</span><br> ";


?>


</body>
</html>
