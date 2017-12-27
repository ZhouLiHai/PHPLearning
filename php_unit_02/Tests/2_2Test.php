<?php

use PHPUnit\Framework\TestCase;

class StackTest2_2 extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
        $this->assertEmpty($stack);
    }
}