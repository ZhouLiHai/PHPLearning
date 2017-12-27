<?php

use PHPUnit\Framework\TestCase;

class StackTest2_5 extends TestCase
{
    public function additionProvider()
    {
        return [
            [0,0,0],
            [1,1,2],
            [1,0,1],
            [1,1,2]
        ];
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $excepted)
    {
        $this->assertEquals($excepted, $a + $b);
    }
}