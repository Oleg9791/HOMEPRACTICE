<?php
if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "Все поля должны быть заполнены <br>";
    echo "<a href='login.html'>Введите верные данные</a>";
    die();
}


    $login = $_POST["login"];
    $password = $_POST["password"];

//    $password = md5($password . "nbhgujl");
if ()
    $mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
    $mysql->query("select `password` from `usersdata` where `password` = '$password'");

    $mysql->close();

    header("Location: correct.html");
