<?php
$str = file_get_contents("voina-i-mir (1).txt");
//echo $str;
$pattern = "/\b(судар)(.*?)\b/ui";
$array = [];
$str1 = preg_match_all($pattern, $str, $array);
//print_r($array);
//echo $str1;
$count = 0;
$count1 = 0;
foreach ($array[0] as $value) {
    if ($value == "сударь") {
        $count += 1;
    } elseif ($value == "сударыня") {
        $count1 += 1;
    }

}
echo "Кол-во слов <b>сударь</b> равно $count " ."<br>";

echo "Кол-во слов <b>сударыня</b> равно $count1 ";