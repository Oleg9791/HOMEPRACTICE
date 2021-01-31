<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <input type="date" name="d">
        <input type="submit" value="ok">
    </form>
    <?php
    $days = [
        "Monday" => "понедельник",
        "Tuesday" => "вторник",
        "Wednesday" => "среда",
        "Thursday" => "четверг",
        "Friday" => "пятница",
        "Saturday" => "суббота",
        "Sunday" => "воскресенье"

    ];
    // echo $today=$_POST["d"];
    $data = explode("-", $_POST["d"]);
    print_r($data);
    // $day=$data[2];
    // echo $day;
    $data = date("l",  mktime(0, 0, 0, $data[1], $data[2], $data[0]));
    echo  $days[$data];
    ?>
</body>

</html>