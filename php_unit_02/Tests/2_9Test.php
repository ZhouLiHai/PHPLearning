<?php

use PHPUnit\Framework\TestCase;

class StackTest2_9 extends TestCase
{
    public function Provider()
    {
        return [['provider1']];
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    /**
     * @dataProvider Provider
     * @depends testProducerFirst
     */
    public function testConsumer()
    {
        $this->assertEquals(['provider1','first'], func_get_args());
    }
}