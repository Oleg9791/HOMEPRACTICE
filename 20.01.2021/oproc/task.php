/ Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры.
// И так, пока сумма не станет однозначным числом (9 и менее).

<?php

$a = 9999989999998;

function sum($c)
{

    $b = array_sum(string_split)
    $sum = array_sum($b);
    $sum1 = str_split($sum);

    if ($sum > 9) {
        $sum2 = array_sum($sum1);
        echo $sum2;
        return $sum2;

    } else {
        echo $sum;

    }
}
echo sum($a);
