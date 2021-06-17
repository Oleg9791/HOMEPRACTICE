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
$url = "https://meteo.by/minsk/";

$html = file_get_contents($url);


 preg_match_all("/<nobr>[\w\d+]+<\/nobr><\/span><\/td>/ui", $html, $match);
print_r($match)
?>
</body>
</html>
