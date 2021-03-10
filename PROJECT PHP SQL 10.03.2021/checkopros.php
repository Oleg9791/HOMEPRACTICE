<?php

if (!empty($_POST["q1"]) and !empty($_POST["q2"]) and !empty($_POST["q3"]) and !empty($_POST["q4"])
    and !empty($_POST["q5"])) {
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    $mysql = new mysqli("127.0.0.1", "root", "root", "user_bd", 3306);

    $mysql->query("INSERT INTO `datatest` (`question1`, `question2`, `question3`, `question4`, `question5`) 
VALUES ('$q1', '$q2', '$q3', '$q4', '$q5')");
    $mysql->close();

}
header("Location: thanks.html");


