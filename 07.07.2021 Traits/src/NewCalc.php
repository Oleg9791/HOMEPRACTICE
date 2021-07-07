<?php


namespace App;

use App\Calc;

class NewCalc extends Calc
{
    use SinTrait;
    use AbsoluteTrait;
    use ExponentTrait;
    use SquareTrait;
}