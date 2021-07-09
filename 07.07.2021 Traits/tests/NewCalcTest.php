<?php

namespace UnitTestCalc;

use App\NewCalc;
use PHPUnit\Framework\TestCase;

class NewCalcTest extends TestCase
{
    private NewCalc $calc;

    public function setUp(): void
    {
        $this->calc = new NewCalc();
    }

    public function testCos()
    {
        $this->assertEquals(0.52532198881, $this->calc->setA(45)->cos());
        $this->assertEquals(1, $this->calc->setA(0)->cos());
        $this->assertNotEquals(-1, $this->calc->setA(0)->cos());
        $this->assertEquals(0, $this->calc->setA(pi() / 2)->cos());
        $this->assertEquals(-1, $this->calc->setA(pi())->cos());
        $this->assertEquals(1, $this->calc->setA(2*pi())->cos());

        $this->assertIsFloat($this->calc->setA(0)->cos());

    }

    public function testSin()
    {
        $this->assertEquals(0.8939966636, $this->calc->setA(90)->sin());
    }

    public function testAbsolut()
    {
        $this->assertEquals(0.5, $this->calc->setA(-0.5)->absolut());
    }

    public function testExp()
    {
        $this->assertEquals(49, $this->calc->setA(7)->exp());
    }

    public function testSquare()
    {
        $this->assertEquals(9, $this->calc->setA(81)->square());
    }
}
