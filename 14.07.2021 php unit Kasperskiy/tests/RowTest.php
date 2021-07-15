<?php

namespace UnitTestRow;

use PHPUnit\Framework\TestCase;
use App\Row;

class RowTest extends TestCase
{
    private Row $row;

    public function setUp(): void
    {
        $this->row = new Row();
    }


    public function testGetSymbol()
    {
        $this->assertTrue(true, $this->row->setStr("~! ? @ # $ % ^ & * _ \- + ( ) [ ] { } > < / \ | \" \' \. , : ;want to programming")->getSymbol());
        $this->assertFalse(false, $this->row->setStr("i want")->getSymbol());

    }

    public function testGetArabNum()
    {
        $this->assertTrue(true, $this->row->setStr("234")->getArabNum());
        $this->assertFalse(false, $this->row->setStr("i want")->getArabNum());

    }

    public function testGetCountNum()
    {
        $this->assertTrue(true, $this->row->setStr("iwantTUjj")->getCountNum());
        $this->assertFalse(false, $this->row->setStr("12jhj")->getCountNum());

    }

    public function testGetCountNumeric()
    {
        $this->assertTrue(true, $this->row->setStr("i want to programming")->getCountNumeric());
        $this->assertFalse(false, $this->row->setStr("i wannjknhkjjjjjnkjbjkbjkbjbjkdshjkvhfjkdbvhjjjjjjjjjjjjjjjjjjjjjjvvvxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcnxcn xcvvvvvvvvvvvvvvvvvzsdfjrhhhhhhhhhrjvbhjbcxcvm m m m m m m m m m m m m m m m llllllllllllllllljjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj")->getCountNumeric());

    }

    public function testWhitespace()
    {
        $this->assertTrue(true, $this->row->setStr("iwanttoprogramming")->getWhitespace());
        $this->assertFalse(false, $this->row->setStr("i want")->getWhitespace());
    }

    public function testGetLat()
    {
        $this->assertTrue(true, $this->row->setStr("iwanttoprogramming")->getLat());
        $this->assertFalse(false, $this->row->setStr("i want")->getLat());
    }

}
