Дано число. Сложите его цифры.
Если сумма получилась более 9-ти, опять сложите его цифры.
И так, пока сумма не станет однозначным числом (9 и менее).
<?php

// $a = 45985;

// $b = str_split($a);
// $sum = array_sum($b);
// $sum1 = str_split($sum);
// if ($sum <= 9) {
//     echo $sum;
// } else {
//     echo  array_sum($sum1);
// }
// Работает без функции

// Вариант с функцией

$a = 577;



function bun($c)
{
    $b = array_sum(str_split($c));
    if ($b > 9) {
        return array_sum(str_split($b));
    } else {
        return $b;
    }
}
echo bun($a);
