<?php

use PHPUnit\Framework\TestCase;

class StackTest4_1 extends TestCase
{
    protected $stack;

    public function setUp()
    {
        $this->stack = [];
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    public static function setUpBeforeClass()
    {

    }

    public static function setUpAfterClass()
    {

    }
}