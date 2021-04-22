<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});

$br = new Br();

echo $br
    ->setClass("table")
    ->setStyle("color:red")
    ->setInnerText("Hello!!!")
    ->html();
echo "<br><br>";

$input = new Input();

echo $input
    ->setClass("form-control")
    ->setStyle("color:red")
    ->setPlaceholder("enter")
    ->setValue("Ok")
    ->setType("submit")
    ->html();
echo "<br>";
$img = new Image();

echo $img
    ->setClass("rounded mx-auto d-block")
    ->setStyle("border: 3px solid red")
    ->setSrc("img.jpg")
    ->html();
echo "<br>";
$h1 = new H1();
echo $h1
    ->setInnerText("I want to learn to programming to work")
    ->setStyle("color:red")
    ->setClass("display-2")
    ->html();
echo "<br>";

$b = new B();
echo $b
    ->setInnerText("I want to learn to programming to work")
    ->setStyle("color:green")
    ->setClass("h2")
    ->html();
echo "<br>";
$i = new B();
echo $i
    ->setInnerText("I want to learn to programming to work")
    ->setStyle("color:blue")
    ->setClass("h3")
    ->html();


?>
</body>
</html>
