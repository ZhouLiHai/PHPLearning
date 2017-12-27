<?php

use PHPUnit\Framework\TestCase;

class StackTest7_1 extends TestCase
{
    public function testSomething()
    {
        $this->markTestSkipped();
    }

    public function testAnotherThing()
    {
        $this->markTestIncomplete();
    }

    /**
     * @requires PHP 5.3.3
     */
    public function testUnderPHP533()
    {
        $this->assertTrue(true);
    }
}