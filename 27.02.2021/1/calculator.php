<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body><br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            <form action="?" method="post">
                <input type="text" class="form-control" name="num1">
                <select name="operator" class="btn btn-info">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="multiply">*</option>
                    <option value="division">/</option>
                </select>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-default" name="num2">
                <input type="submit" class="btn btn-primary" value="рассчитать">
            </form>

        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>
<?php
$num1 = $_POST["num1"];
$operator = $_POST["operator"];
$num2 = $_POST["num2"];
if (is_numeric($_POST["num1"]) and is_numeric($_POST["num2"])) {
    if ($_POST["operator"] == "plus") {
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    One of three columns
                </div>
                <div  class="alert alert-secondary">
                    <?= $result = $num1 + $num2; ?>
                </div>
                <div class="col-sm">
                    One of three columns
                </div>
            </div>
        </div> <?php
    } elseif ($_POST["operator"] == "minus") {
        echo $result = $num1 - $num2;
    } elseif ($_POST["operator"] == "multiply") {
        echo $result = $num1 * $num2;
    } elseif ($_POST["operator"] == "division") {
        echo $result = round($num1 / $num2, 3);
    }
}
?>
</body>
</html>

