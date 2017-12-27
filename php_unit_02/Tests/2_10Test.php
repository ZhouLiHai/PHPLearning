<?php

use PHPUnit\Framework\TestCase;

class StackTest2_10 extends TestCase
{
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
        throw new InvalidArgumentException();
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionWithHead()
    {
        throw new InvalidArgumentException();
    }
}