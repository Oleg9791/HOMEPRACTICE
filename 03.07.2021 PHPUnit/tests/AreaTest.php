<?php

use PHPUnit\Framework\TestCase;
use App\Rectangle;
use App\Square;
use App\Triangle;

class AreaTest extends TestCase
{
    public function testArea()
    {
        $rect = new Rectangle();
        $this->assertEquals(12, $rect->setA(3)->setB(4)->area());

        $sqr = new Square();
        $this->assertEquals(25, $sqr->setA(5)->area());

        $trl = new Triangle();
        $this->assertEquals(31.5, $trl->setA(7)->setB(9)->area());

    }
}