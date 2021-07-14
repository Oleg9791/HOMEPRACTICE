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

    public function testGetRow()
    {
        $this->assertTrue(true, $this->row->setStr("i want to programming")->getCountNum());
        $this->assertFalse(false, $this->row->setStr("i want")->getCountNum());
    }

}
