<?php

use PHPUnit\Framework\TestCase;

require "2_6Content/CsvFileIterator.php";

class StackTest2_6 extends TestCase
{
    public function additionProvider()
    {
        return new CsvFileIterator('/data.csv');
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $excepted)
    {
        $this->assertEquals($excepted, $a + $b);
    }
}