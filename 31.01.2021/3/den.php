<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <h2> Сколько прошло дней с даты рождения </h2>
        <input type="date" name="data"> <br> <br>
        <input type="submit" value="получить">
    </form>
    <?php
    $today = time();
    echo $today . "<br>";
    // echo date("d-M-Y(l)", mktime(0, 0, 0, 4, 5, 1986)) . "<br>" . "<br>"; //метка времени для заданной даты

    $data = explode("-", $_POST["data"]);
    print_r($data);

    $dataRogdenia = mktime(0, 0, 0, $data[1], $data[2], $data[0]);
    echo $dataRogdenia . "<br>";
    echo $rasnost = $today - $dataRogdenia . "<br>";
    echo "С даты рождения прошло : " . $day = floor($rasnost / (60 * 60 * 24)) . "дней.";



    ?>
</body>

</html>