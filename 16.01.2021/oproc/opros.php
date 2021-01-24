<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="opros.css">
</head>
<body>
<!-- <div> -->
<?php
$data = file("opros.txt");
// print_r($_POST);


$answer = $_POST["a"];
// echo $answer;
$data[$answer] = ($data[$answer] + 1) . "\n";
echo "<div class=meny>";

echo '<h2 >Результаты голосования: </h2>'; 

echo "<p>Mercedes-Benz: " . $data[0] . "</p>";
echo "<p>Audi: " . $data[1]. "</p>";
echo "<p>Volkswagen: " . $data[2] . "</p>";
echo "<p>BMW: " . $data[3] . "</p>";
  echo "</div>";
// print_r($_POST);
$saveData = $data[0] . $data[1] . $data[2] . $data[3];
$fp = fopen("opros.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);
?>
<!-- </div> -->
</body>
</html>




