<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form action="?" method="post">
    <input type="text" name="text">
    <input type="submit" value="ok">

</form>
<?php
//$str=$_POST["text"];
$pattern = "/^([80212]+[(15|16)]{2}\d{4})$|^([\+375212]{7}+[\d]{6,6})$|^([\+375\(212\)]{9,9}+[\d]{6,6})$|^([\+375\(212\)]{9,9}+\d{2}\-+\d{2}\-[\d]{2})$|^([\+375\-\(212\)\-]{11,11}+\d{2}\-+\d{2}\-[\d]{2})$|^(\d{6})$/";
if (preg_match($pattern, $_POST["text"])) {
    echo "ok";
} else {
    echo "no";
}
?>
</body>
</html>
