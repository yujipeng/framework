<?php

// 示例  优先级

// class Base {
//     public function sayHello() {
//         echo 'Hello ';
//     }
// }
// trait SayWorld {
//     public function sayHello() {
//         parent::sayHello();
//         echo 'World!';
//     }
// }
// class MyHelloWorld extends Base {
//     use SayWorld;
// }
// $o = new MyHelloWorld();
// $o->sayHello();

// trait HelloWorld {
//     public function sayHello() {
//         echo 'Hello World!';
//     }
// }
// class TheWorldIsNotEnough {
//     use HelloWorld;
//     public function sayHello() {
//         echo 'Hello Universe!';
//     }
// }
// $o = new TheWorldIsNotEnough();
// $o->sayHello();


// 示例 多个 trait

// trait Hello {
//     public function sayHello() {
//         echo 'Hello ';
//     }
// }
// trait World {
//     public function sayWorld() {
//         echo 'World';
//     }
// }
// class MyHelloWorld {
//     use Hello, World;
//     public function sayExclamationMark() {
//         echo '!';
//     }
// }
// $o = new MyHelloWorld();
// $o->sayHello();
// $o->sayWorld();
// $o->sayExclamationMark();


// 示例 1 解决多个trait 的冲突

// trait A {
//     public function smallTalk() {
//         echo 'a'.PHP_EOL;
//     }
//     public function bigTalk() {
//         echo 'A'.PHP_EOL;
//     }
// }
// trait B {
//     public function smallTalk() {
//         echo 'b'.PHP_EOL;
//     }
//     public function bigTalk() {
//         echo 'B'.PHP_EOL;
//     }
// }
// class Talker {
//     use A, B {
//         B::smallTalk insteadof A;
//         A::bigTalk insteadof B;
//     }
// }
// class Aliased_Talker {
//     use A, B {
//         B::smallTalk insteadof A;
//         A::bigTalk insteadof B;
//         B::bigTalk as talk;
//     }
// }

// $obj = new Talker();
// $obj->smallTalk();
// $obj->bigTalk();

// $obj = new Aliased_Talker();
// $obj->smallTalk();
// $obj->bigTalk();
// $obj->talk();


// 示例 2  改别名和改访问控制

// trait myClass{
//     public function sayHello() {
//         echo 'Hello World!';
//     }
// }
// // 修改 sayHello 的访问控制
// class MyClass1 {
//     use myClass { sayHello as protected; }
// }
// // 给方法一个改变了访问控制的别名
// // 原版 sayHello 的访问控制则没有发生变化
// class MyClass2 {
//     use myClass { sayHello as private myPrivateHello; }
// }

// // $obj = new MyClass1();
// // $obj->sayHello();
// $obj = new MyClass2();
// $obj->sayHello();
// // $obj->myPrivateHello();

// 示例 3 多个trait组成trait

// trait Hello {
//     public function sayHello() {
//         echo 'Hello ';
//     }
// }
// trait World {
//     public function sayWorld() {
//         echo 'World!';
//     }
// }
// trait HelloWorld {
//     use Hello, World;
// }
// class MyHelloWorld {
//     use HelloWorld;
// }
// $o = new MyHelloWorld();
// $o->sayHello();
// $o->sayWorld();


// 示例 4 抽象方法

// trait Hello {
//     public function sayHelloWorld() {
//         echo 'Hello '.$this->getWorld();
//     }
//     abstract public function getWorld();
// }
// class MyHelloWorld {
//     private $world;
//     use Hello;
//     public function getWorld() {
//         return $this->world;
//     }
//     public function setWorld($val) {
//         $this->world = $val;
//     }
// }

// $obj = new MyHelloWorld();
// $obj->setWorld(" world! \n");
// $obj->sayHelloWorld();
// echo $obj->getWorld();


// 示例 5 静态方法，静态变量

// trait Counter {
//     public static $c = 0;
//     public static function inc() {
//         self::$c = self::$c + 1;
//         echo self::$c . "\n";
//     }
// }
// class C1 {
//     use Counter;
// }
// class C2 {
//     use Counter;
// }
// C1::inc(); // echo 1
// C2::inc(); // echo 1


// 示例 定义属性

// trait PropertiesTrait {
//     public $x = 2;
// }
// class PropertiesExample {
//     use PropertiesTrait;
// }
// $example = new PropertiesExample;
// echo $example->x;

// 示例  定义属性重复

// trait PropertiesTrait {
//     public $same = true;
//     public $different = false;
// }
// class PropertiesExample {
//     use PropertiesTrait;
//     public $same = true; // Strict Standards
//     public $different = true; // 致命错误
// }
//


// 示例 __CLASS__ 和 __TRAIT__

// trait TestTrait {
//     public function testMethod() {
//         echo "Class: " . __CLASS__ . PHP_EOL;
//         echo "Trait: " . __TRAIT__ . PHP_EOL;
//     }
// }
// class BaseClass {
//     use TestTrait;
// }
// class TestClass extends BaseClass {
// }
// $t = new TestClass();
// $t->testMethod();
//Class: BaseClass
//Trait: TestTrait


// 综合示例
error_reporting(E_ALL);
trait singleton {    
    /**
     * private construct, generally defined by using class
     */
    //private function __construct() {}
    public static function getInstance() {
        static $_instance = NULL;
        $class = __CLASS__;
        var_dump($class);
        return $_instance ?: $_instance = new $class;
    }
}
/**
 * Example Usage
 */
class foo {
    use singleton;
    private function __construct() {
        $this->name = 'foo'.PHP_EOL;
    }
}
class bar {
    use singleton;
    private function __construct() {
        $this->name = 'bar'.PHP_EOL;
    }
}
$foo = foo::getInstance();
echo $foo->name;
$bar = bar::getInstance();
echo $bar->name;


