<?php

use PHPUnit\Framework\TestCase;

class StackTest2_13 extends TestCase
{
    public function testFailed()
    {
        $writer = new FileWriter();

        $this->assertFalse(@$writer->write('no/such/file', 'some stuff'), false);
    }
}

class FileWriter
{
    private $file;
    public function write($file, $content) {
        $this->file = fopen($file);
        return false;
    }
}