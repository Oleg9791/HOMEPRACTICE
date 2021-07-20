<?php

namespace UnitTestFigures;

use PHPUnit\Framework\TestCase;
use App\Figures;

class FiguresTest extends TestCase
{
    private ?Figures $figures = null;

    public function setUp(): void
    {
        $this->figures = new Figures();
    }

    public function testGetAreaTrapezium(): void
    {
        $this->assertEquals(18, $this->figures->setA(4)->setB(8)->setC(3)->getAreaTrapezium());

    }

    public function testGetPerimeterTrapezium(): void
    {

        $this->assertEquals(13, $this->figures->setA(3)->setB(3)->setC(3)->setD(4)->getPerimeterTrapezium());
    }

    public function testGetAreaRectangle(): void
    {
        $this->assertEquals(35, $this->figures->setA(5)->setB(7)->getAreaRectangle());

    }

    public function testGetPerimeterRectangle(): void
    {
        $this->assertEquals(24, $this->figures->setA(5)->setB(7)->getPerimeterRectangle());

    }

    public function testGetAreaSquare(): void
    {
        $this->assertEquals(25, $this->figures->setA(5)->getAreaSquare());
    }

    public function testGetPerimeterSquare(): void
    {
        $this->assertEquals(20, $this->figures->setA(5)->getPerimeterSquare());

    }

    public function testGetAreaTriangle(): void
    {
        $this->assertEquals(10, $this->figures->setA(5)->setB(4)->getAreaTriangle());

    }

    public function testGetPerimeterTriangle(): void
    {
        $this->assertEquals(15, $this->figures->setA(5)->setB(4)->setC(6)->getPerimeterTriangle());

    }


    public function testGetAreaRhombus(): void
    {
        $this->assertEquals(20, $this->figures->setA(5)->setB(4)->getAreaRhombus());

    }

    public function testGetPerimeterRhombus(): void
    {
        $this->assertEquals(20, $this->figures->setA(5)->getPerimeterRhombus());

    }

}
