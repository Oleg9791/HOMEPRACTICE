<?php
include_once "connect.php";
//echo $_POST['id'];
$sql = "UPDATE `opros` SET `city`='$_POST[city]',`email`='$_POST[email]',`sex`='$_POST[sex]',`age`='$_POST[age]' WHERE `id`=$_POST[id]";
/** @var mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");
