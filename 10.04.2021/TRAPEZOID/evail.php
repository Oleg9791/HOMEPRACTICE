<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div id="position" class="col-sm">
            <div id="center" class="alert alert-warning" role="alert"><h2>Расчет</h2></div>
            <?php

            include_once "Trapezoid.php";

            $per = new Trapezoid($_POST["a"], $_POST["b"], $_POST["c"]);
            echo "<div id='center' class='alert alert-secondary' role='alert'>Результат ={$per->{$_POST['op']}()}<br></div>";
            //$area->setA(3);
            //echo "Площадь куба = {$area->square($_POST['op'])}<br>";
            //echo "Периметр куба ={$per->perimeter($_POST['op'])}<br>";
            ?>
            <a id="button" href="index.html" class="btn btn-danger">Вернуться к расчету</a>
        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>
