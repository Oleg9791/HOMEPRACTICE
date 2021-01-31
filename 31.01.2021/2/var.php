<?php
echo date("d-M-Y(l)", mktime(0, 0, 0, 4, 5, 1986)) . "<br>" . "<br>"; //метка времени для заданной даты
echo microtime(); //возвращает текущую метку времени с микросекундами
echo "<br>\n";

?>
<?php
echo "<br>\n";

$timestart = microtime(true);
for ($i = 0; $i < 1000; $i++) {
}
$timeend = microtime(true);
echo $time = $timeend - $timestart . "<br>";

?>
<?php

// date_default_timezone_get('Europe/Minsk');

echo date("H:i:s D-M-Y")."<br>";
print_r(getdate()) ;
?>
