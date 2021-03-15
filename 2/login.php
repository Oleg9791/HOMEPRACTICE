
<?php

if (empty($_POST["login"] or $_POST["login"] = "")
    and empty($_POST["password"] or $_POST["password"] = "")) {
    echo "Все поля должны быть заполнены <br>";
    echo "<a href='login.html'>Введите верные данные</a>";
    die();
}


$login = $_POST["login"];
$password = $_POST["password"];


$password = md5($password . "nbhgujl");
$mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);
$query = $mysql->query("SELECT * FROM `usersdata` WHERE `password` = '$password' AND `login` = '$login'");
$result = $query->fetch_assoc();
if (empty($result)) {

    echo "Такой пользователь не существует <br><a href='login.html'>Введите верные данные</a>";
    exit();
}

setcookie("id", $result["id_user"], time() + 30, "/");
$mysql->close();

header("Location: correct.html");
