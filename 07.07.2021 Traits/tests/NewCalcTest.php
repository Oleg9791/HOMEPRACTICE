<?php

namespace App;

use App\NewCalc;
use PHPUnit\Framework\TestCase;

class NewCalcTest extends TestCase
{

    public function testSquare()
    {
        $calc = new NewCalc();
        $this->assertEquals(0.52532198881, $calc->setA(45)->cos());

    }

    public function testAbsolut()
    {
        $calc = new NewCalc();
        $this->assertEquals(0.8939966636, $calc->setA(90)->sin());

    }

    public function testExp()
    {
        $calc = new NewCalc();
        $this->assertEquals(0.5, $calc->setA(-0.5)->absolut());

    }

    public function testCos()
    {
        $calc = new NewCalc();
        $this->assertEquals(49, $calc->setA(7)->exp());

    }

    public function testSin()
    {
        $calc = new NewCalc();
        $this->assertEquals(9, $calc->setA(81)->square());
    }
}
