<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">

    <title>Document</title>
</head>

<body>

    <?php
    $olimp = mktime(0, 0, 0, 7, 23, 2021);
    echo $olimp . "<br>";
    echo $today = $olimp - time() . "<br>";
    $day = floor($today / (60 * 60 * 24));
    echo "осталось" . $day . "дня  " . "<br>";
    // echo 10 % 4;
    echo  $hour = floor(($today %  (60 * 60 * 24)) / (60 * 60)) . "  часов" . "<br>";
    echo  $minut = floor(($today %  (60 * 60)) / (60)) . "  минут" . "<br>";
    echo  $secund = $today %   60 . "  секунд";

    ?>
</body>

</html>