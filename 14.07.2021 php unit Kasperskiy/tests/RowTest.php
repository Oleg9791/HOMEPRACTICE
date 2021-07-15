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

    public function testgetCountNum()
    {
        $this->assertEquals(true, $this->row->setStr("iwanttoprogramming")->getCountNum());
        $this->assertEquals(true, $this->row->setStr("123graFming")->getCountNum());
    }

    public function testgetCountNumeric()
    {
        $this->assertEquals(true, $this->row->setStr("Дорогиедрузобеспечиваетактуальностьдальнейшихнаправлениразвитаясистемымассовсныйэкспериментпроверкиключевыомпонентов")->getCountNumeric());

    }

    public function testgetArabNum()
    {
        $this->assertEquals(true, $this->row->setStr("123")->getArabNum());

    }

    public function testgetKir()
    {
        $this->assertEquals(true, $this->row->setStr("Дорогиедрузоб")->getKir());

    }

    public function testgetLat()
    {
        $this->assertEquals(true, $this->row->setStr("i11wanttoprogramming")->getLat());

    }
    public function testgetSymbol()
    {
        $this->assertEquals(false, $this->row->setStr("!?@#$%^&*i11 want5 to programming24")->getSymbol());
        $this->assertEquals(false, $this->row->setStr("~!?@#$%^&*_\-+()\[\]{}><\/\|\"\\\'\\\.,:;i11 want5 to programming24")->getSymbol());
        $this->assertEquals(true, $this->row->setStr("ant5 to programming24")->getSymbol());

    }
    public function testgetTopBot()
    {
        $this->assertEquals(5, $this->row->setStr("iwDntto4programming24")->getTopBot());

    }
    public function testgetWhitespace()
    {
        $this->assertEquals(5, $this->row->setStr("i11want5toprogramming24")->getWhitespace());

    }

}
