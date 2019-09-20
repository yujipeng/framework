# framework
use composer to create my framework 

当前php版本 ：  PHP 5.4.14


# 组件列表

* http相关 guzzlehttp/guzzle
    * github : https://github.com/guzzle/guzzle
    * composer require guzzlehttp/guzzle
    * 测试文件 : ./test/testHttp.php

* string相关 danielstjules/stringy
    * github : https://github.com/danielstjules/stringy
    * composer require danielstjules/stringy
    * 测试文件 ：./test/testStringy.php





* phpunit相关 composer require phpunit/phpunit
    * http: https://phpunit.de/index.html
    * composer require phpunit/phpunit 
    * 执行命令 ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests
