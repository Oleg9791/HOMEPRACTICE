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
    <input type="date" name="d">
    <input type="submit" value="ok">
</form>
<?php
$data = explode(".", $_POST["d"]);
print_r($data);
$data1 = explode("-", $data[0]);
print_r($data1);

for ($i = 0; $i < count($data1); $i++) {
    for ($j = $i + 1; $j < count(($data1)); $j++) {
        if ($data1[$i] > $data1[$j]) {
            $buf = $data1[$i];
            $data1[$i] = $data1[$j];
            $data1[$j] = $buf;


        }


    }

}
print_r($data1) . "\n" ;
echo "<br><br>";
echo implode(".", $data1);
?>
</body>
</html>