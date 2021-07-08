<?php

use PHPUnit\TextUI\XmlConfiguration\PHPUnit;
use App\Calc;
use App\NewCalc;

class CalcTest extends \PHPUnit\Framework\TestCase
{
    public function testCalc()
    {
        $calc = new Calc();
        $this->assertEquals(0.52532198881, $calc->setA(45)->cos());

        $calc2 = new NewCalc();
        $this->assertEquals(0.8939966636, $calc2->setA(90)->sin());
        $this->assertEquals(0.5, $calc2->setA(-0.5)->absolut());
        $this->assertEquals(49, $calc2->setA(7)->exp());
        $this->assertEquals(9, $calc2->setA(81)->square());
    }
}