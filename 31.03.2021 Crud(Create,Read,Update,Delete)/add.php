<?php
include_once "connect.php";
//$link = mysqli_connect("localhost", "root", "root", "servicevote");

if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`city`, `email`, `sex`, `age`) VALUES ('$_POST[city]','$_POST[email]','$_POST[sex]','$_POST[age]')";
    /** @var mysqli $link */
    mysqli_query($link, $sql);
}

header("location: show.php");