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
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="text" name="c">
    <input type="text" name="d">
    <input type="submit" value="ok">
</form>

<?php
include "vendor/autoload.php";

use Classes\Plane;

if (isset($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d'])) {
    $plane = new Plane($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d']);
    echo $plane->freePlace() . "<br><br>";
    echo $plane->range();

}

?>

</body>
</html>




