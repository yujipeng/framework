<?php
use PHPUnit\Framework\TestCase;

// class TemplateMethodsTest extends TestCase
// {
//     protected static $dbh;
//
//     public static function setUpBeforeClass()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//         self::$dbh = new PDO('sqlite::memory:');
//     }

//     protected function setUp()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//     }

//     protected function assertPreConditions()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//     }

//     public function testOne()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//         $this->assertTrue(true);
//     }

//     public function testTwo()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//         // $this->assertTrue(false); // 断言出错，自动调用onNotSuccessfulTest
//         $this->assertFalse(false);
//     }

//     protected function assertPostConditions()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//     }

//     protected function tearDown()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//     }

//     public static function tearDownAfterClass()
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//         self::$dbh = null;
//     }

//     protected function onNotSuccessfulTest(Exception $e)
//     {
//         fwrite(STDOUT, __METHOD__ . "\n");
//         throw $e;
//         // fwrite(STDOUT, $e . "\n");
//     }
// }
