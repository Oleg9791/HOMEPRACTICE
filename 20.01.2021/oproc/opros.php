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
$data = explode(".",file_get_contents("opros.txt"));
// print_r($data);
$data[$_POST["a"]]++ ;

file_put_contents("opros.txt",implode(".",$data));
echo "<div class=meny>";
echo '<h2 >Результаты голосования: </h2>'; 
echo "<p>Mercedes-Benz: " .round(($data[0]*100 /array_sum($data)),2) . "%</p>";
echo "<p>Audi: " . round($data[1]*100 /array_sum($data),2). "%</p>";
echo "<p>Volkswagen: " .round($data[2]*100 /array_sum($data),2) . "%</p>";
echo "<p>BMW: " . round($data[3]*100 /array_sum($data),2) . "%</p>";
echo "<p>Общее количество посещений :".array_sum($data).  "</p>";
  echo "</div>";
?>
<!-- </div> -->
</body>
</html>




