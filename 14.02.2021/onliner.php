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
$data = $_POST["url"];
$text = file_get_contents($data);
$pat = "/<div class=\"news-entry__speech\">\n?([ ]+)?<p>[\w.,\-\s\(\)\:]+<\/p>\n?([ ]+)?<\/div>/ui";
//$pat = "/<div class=\"news-entry\">\n?([ ]+)?<p>[\w.,\s-]+<\/p>\n?([ ]+)?<\/div>/iu";
preg_match_all($pat, $text, $match);
foreach ($match[0] as $value) {
    echo $value . "<br>";
}
//print_r($match);
?>
<?php
//$a = $_POST["url"];
//$str = file_get_contents($a);
//$regexp = "/<div class=\"news-entry\">\n?([ ]+)?<p>[\w.,\s-]+<\/p>\n?([ ]+)?(<\/div>)+/iu";
//$q = preg_match_all($regexp, $str, $matches);
//foreach ($matches[0] as $match) {
//    echo $match."<br>";
//}
