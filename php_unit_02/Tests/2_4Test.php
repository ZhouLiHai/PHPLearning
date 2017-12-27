<?php

use PHPUnit\Framework\TestCase;

class StackTest2_4 extends TestCase
{
    public function testProductorFirst()
    {
        $this->assertTrue(true);

        return "first";
    }

    public function testProductorSecond()
    {
        $this->assertTrue(true);

        return "second";
    }

    /**
     * @depends testProductorFirst
     * @depends testProductorSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(['first', 'second'], func_get_args());
    }
}