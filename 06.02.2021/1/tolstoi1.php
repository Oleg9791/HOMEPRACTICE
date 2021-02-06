<?php
$str = file_get_contents("voina-i-mir (1).txt");
$pattern = "/\b(судар)(.*?)\b/ui";
$str1 = preg_match_all($pattern, $str, $array);
$count = 0;
foreach ($array[0] as $value) {
    if ($value == "сударь") {
        $count += 1;
    }

}
echo "Кол-во слов <b>сударь</b> равно $count";