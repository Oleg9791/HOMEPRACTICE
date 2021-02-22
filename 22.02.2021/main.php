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
<?php
include "function.php";
$data = json_decode(file_get_contents("data.json"), true);
foreach ($data as $row) {
    if (!zensura($row["msg"])) {
        $a = preg_replace("/\d{2}+\-\d{2}+\-\d{2}+/iu", " ", $row["time"]);
        echo smile($row["msg"]) . " " . $row["name"] . $a . "<br\n>";

    }
}
?>
<form action="add.php" method="post">
    <textarea name="msg" cols="30" rows="10"></textarea>
    <input type="text" name="name">
    <input type="submit" value="ok">
</form>
</body>
</html>

