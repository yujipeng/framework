<?php
use PHPUnit\Framework\TestCase;

// class StackTest extends TestCase
// {
//     public function testEmpty()
//     {
//         $stack = [];
//         $this->assertEmpty($stack);

//         return $stack;
//     }

//     /**
//      * @depends testEmpty
//      */
//     public function testPush(array $stack)
//     {
//         array_push($stack, 'foo');
//         $this->assertEquals('foo', $stack[count($stack)-1]);
//         $this->assertNotEmpty($stack);

//         return $stack;
//     }

//     /**
//      * @depends testPush
//      */
//     public function testPop(array $stack)
//     {
//         $this->assertEquals('foo', array_pop($stack));
//         $this->assertEmpty($stack);
//     }
// }




class StackTest extends TestCase
{
    protected $stack;

    protected function setUp()
    {
        $this->stack = [];
    }

    public function testEmpty()
    {
        $this->assertTrue(empty($this->stack));
    }

    public function testPush()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', $this->stack[count($this->stack)-1]);
        $this->assertFalse(empty($this->stack));
    }

    public function testPop()
    {
        array_push($this->stack, 'foo');
        $this->assertEquals('foo', array_pop($this->stack));
        $this->assertTrue(empty($this->stack));
    }
}
