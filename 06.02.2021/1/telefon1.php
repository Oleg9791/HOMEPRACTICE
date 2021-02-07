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
    <input type="text" name="text">
    <input type="submit" value="ok">
</form>

<?php

$pattern = "/^80212[\d]{6}$|^\+375212[\d]{6}$|^\+375\(212\)\d{6}$|^\+375\(212\)[\d]{2}\-[\d]{2}\-[\d]{2}$|^\+375\-\(212\)\-[\d]{2}\-[\d]{2}\-[\d]{2}$|^[\d]{6}$/";
$str = preg_match($pattern, $_POST["text"]);
if ($str == 1) {
    echo "ok";
} else {
    echo "no";
}
?>
</body>
</html>