<?php

/**
 * Class Calc класс калькулятор
 */
class Calc
{
    /**
     * @var float переменная a для вычислений калькулятора
     */
    public float $a;


    /**
     * Calc constructor. конструктор инициализирует переменную а
     * @param $a
     */

    public function __construct($a)
    {
        $this->a = $a;
    }

    /**
     * @return float функция для извлечения корня числа
     */
    public function radial(): float
    {

        return sqrt($this->a);
    }

    /**
     * @return float функция для нахождения синуса числа
     */

    public function sinus(): float
    {

        return sin($this->a);
    }

    /**
     * @return float функция для нахождения модуля числа
     */

    public function mod(): float
    {

        return abs($this->a);
    }
}


//$calc = new Calc(10);

//echo $calc->sqrt() . "<br>";
//echo $calc->sin() . "<br>";
//echo $calc->mod();
