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

    public function testGetTopRow()
    {
        $this->assertEquals("I WANT TO PROGRAMMING", $this->row->setLen("i want to programming")->getTopRow());
    }

    public function testGetLengthRow()
    {
        $this->assertEquals(21, $this->row->setLen("i want to programming")->getLengthRow());

    }

    public function testGetSigns()
    {
        $this->assertEquals(4, $this->row->setLen("i, want! to. programming?")->getSigns());

    }

    public function testGetBottomRow()
    {
        $this->assertEquals("i want to programming", $this->row->setLen("I WANT TO PROGRAMMING")->getBottomRow());

    }

    public function testGetNum()
    {
        $this->assertEquals(5, $this->row->setLen("i11 want5 to programming24")->getNum());

    }
}
