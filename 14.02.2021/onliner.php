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
    <input type="text" name="url">
    <input type="submit" value="ok">
</form>
</body>
</html>
<?php
if (!empty($_POST["url"])) {

    $data = $_POST["url"];
    $text = file_get_contents($data);
    $pat = "/<div class=\"news-entry__speech\">.*?<\/div>/uis";

    preg_match_all($pat, $text, $match);
    print_r($match[0][0]);
}
?>