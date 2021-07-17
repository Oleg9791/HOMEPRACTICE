<?php

namespace UnitTestFigures;

use PHPUnit\Framework\TestCase;
use App\Figures;

class FiguresTest extends TestCase
{
    private Figures $figures;

    public function setUp(): void
    {
        $this->figures = new Figures();
    }

    public function testGetAreaTrapezium()
    {
        $this->assertEquals(18, $this->figures->setA(4)->setB(8)->setH(3)->getAreaTrapezium());

    }

    public function testGetPerimeterTrapezium()
    {

        $this->assertEquals(13, $this->figures->setA(3)->setB(3)->setC(3)->setD(4)->getAreaTrapezium());
    }

    public function testGetAreaRectangle()
    {

    }

    public function testGetPerimeterRectangle()
    {

    }

    public function testGetAreaSquare()
    {
        $this->assertEquals(25, $this->figures->setA(5)->getAreaSquare());
    }

    public function testGetPerimeterSquare()
    {
        $this->assertEquals(20, $this->figures->setA(5)->getPerimeterSquare());

    }

    public function testGetAreaTriangle()
    {

    }

    public function testGetPerimeterTriangle()
    {

    }


    public function testGetAreaRhombus()
    {

    }

    public function testGetPerimeterRhombus()
    {

    }


}
