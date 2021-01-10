<?php
$the_string = "Я на 5 лет старше тебя.";
$the_word  = "лет";
$the_character = "Я";
$the_substring = "5 лет";

// Вывод — Слово "лет" есть в данной строке.
// if (strstr($the_string, $the_word) == true) {
//     echo 'Слово "' . $the_word . '" есть в данной строке.';
// }

// Вывод — Символ "Я" есть в данной строке.
// if (strstr($the_string, $the_character) !== false) {
//     echo 'Символ "' . $the_character . '" есть в данной строке.';
// }

// Вывод — Подстрока "5 лет" есть в данной строке.
if (strstr($the_string, $the_substring) !== true) {
    echo 'Подстрока "' . $the_substring . '" есть в данной строке.';
}
