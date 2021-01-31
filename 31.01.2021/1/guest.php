<?php
if (!empty($_POST) && ($_POST["name"] != "") && ($_POST["text"] != "")) {

    $row = "\n<--->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"] . "\n" .
        $time = date("d-M-Y H:i-s");
    file_put_contents("guest.txt", $row, FILE_APPEND);
    header("Location: ?");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <h1>GUESTBOOK</h1>
        <h2> Введите имя</h2>
        <input type="text" name="name">
        <h2> Введите e-mail</h2>
        <input type="text" name="email">
        <h2> Введите текст сообщения</h2>
        <input type="text" name="text"> <br>
        <input type="submit" value="отправить">
    </form>
    <br>
    <?php
    $data = file_get_contents("guest.txt");
    $records = explode("<--->", $data);
    echo "<table border='2' width='700px'>";
    echo "<th>ИМЯ</th><th>E-mail</th><th>ТЕКСТ</th><th>ДАТА/Время</th>";
    foreach ($records as $value) {

        $row = explode("\n", trim($value));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>