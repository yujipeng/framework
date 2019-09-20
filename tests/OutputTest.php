<?php
use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function testExpectOutputString()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    // public function testGetActualOutput()
    // {
    //     print 'baz';
    //     $this->getActualOutput('bar');
    // }

    public function testExpectOutputRegex(){
        $this->expectOutputRegex('/Laravel/i');
        echo 'Laravel学院';
    }
}
