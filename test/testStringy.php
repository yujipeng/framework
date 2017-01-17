<?php

require dirname(__FILE__).'/../vendor/autoload.php';

mb_internal_encoding('UTF-8');

// use Stringy\StaticStringy as S;
// // Translates to Stringy::create('fòôbàř')->slice(0, 3);
// // Returns a Stringy object with the string "fòô"
// echo S::slice('fòôbàř', 1, 3);
//


use Stringy\Stringy as S ;

// php 5.6 开始生效的规则
// use function Stringy\create as s; s 代替 S::create
// echo s('fòô     bàř')->collapseWhitespace()->swapCase();

// 第二参数，用于指定字符集；如果没有指定字符集，则使用 mb_internal_encoding()
// echo S::create('fòô     bàř', 'UTF-8')->collapseWhitespace()->swapCase().chr(10); // 'FÒÔ BÀŘ'

// $stringy = S::create('fòôbàř');
// foreach ($stringy as $char) {
//     echo $char.chr(10);
// }
// $stringy = S::create('bàř');
// echo $stringy[2];     // 'ř'
// echo $stringy[-2];    // 'à'
// echo isset($stringy[-4]);  // false
// $stringy[3];          // OutOfBoundsException
// $stringy[2] = 'a';    // Exception

// 方法示例

// getEncoding 获取当前字符集
// echo S::create('fòôbàř')->getEncoding();

// length 统计字符数
// $stringy = S::create('fòôbàř'); 
// echo count($stringy).chr(10);
// echo S::create('fòôbàř')->length(); 
// lines 按照行回车分割成数组，返回数组
// $lines = S::create("fòô\r\nbàř\n")->lines();
// foreach($lines as $line) echo $line.chr(10);

// append 在结尾附加字符 
// echo S::create('test')->append('aaaàř').chr(10);

// at 返回对应索引的字符
// echo S::create('test')->at(3).chr(10);
// first 返回前几个字符
// echo S::create('test begin')->first(2);
// laset 返回后几个字符
// echo S::create('test begin')->last(2);

// between 在字符集中间的数据返回 
// echo S::create('{foo} and {bar}')->between('{', '}').chr(10);

// chars 字符集数组形式转换
// $stringy = S::create('fòôbàř'); 
// var_dump($stringy->chars());

// collapseWhitespace 空格合并处理
// echo S::create(' sf wesd oosd fòô     bàř')->collapseWhitespace();

// contains containsAll containsAny 检查是否包含字符串  
// 第二参数 是 大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('Ο συγγραφέαςa είπε')->contains('συγγραφέαςA', false);
// echo S::create('Foo & bar')->containsAll(['bar', 'foo'], false);
// echo S::create('str contains Foo ')->containsAny(['bar', 'foo'], false);

// countSubstr 检查字符串出现的次数  
// 第二参数 是 大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('Ο συγγραφέας είπε aa A')->countSubstr('a', false);

// camelize  驼峰式处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('test Camel_sizeAct-level')->camelize();
// dasherize 横线连接处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('FooBaa_sss_EEE-fff tttt')->dasherize();
// delimit 指定字符连接处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('fooBar_test_FF tt')->delimit('->');
// humanize 将字符串中的首字符大写，去掉 下划线之后的字符
// echo S::create('auther_id ste-tt_ss')->humanize();

// endsWith 判断是否以指定字符结尾
// 第二参数 是 大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('foo bar')->endsWith('Bar', false);

// ensureLeft 确定字符以指定字符开始，如果没有，自动添加
// echo S::create('foobar')->ensureLeft('http://');
// ensureRight 确定字符以指定字符结束，如果没有，自动添加
// echo S::create('foobar')->ensureRight('.com');

// hasLowerCase 检查字符串中是否包含小写字母
// echo S::create('FOOaBAR')->hasLowerCase();
// hasUpperCase 检查字符串中是否包含大写字母
// echo S::create('foobarA')->hasUpperCase();
// isLowerCase 检查字符串中是否都是小写字母
// echo S::create('foobar')->isLowerCase();
// isUpperCase 检查字符串中是否都是大写字母
// echo S::create('FOOBAR')->isUpperCase();

// htmlEncode() 转换字符到html entities
// echo S::create('&')->htmlEncode();
// htmlDecode() 转换 html entities  到 常用字符
// echo S::create('&lt;')->htmlDecode();

// indexOf 获取对应字符串的索引位置
// echo S::create('string')->indexOf('ing');
// indexOfLast 获取对应字符串的最后一次出现的索引位置
// echo S::create('foobarfoo')->indexOfLast('foo');
// insert 在字符集的指定索引位置，添加指定字符
// echo S::create('testFoobar')->insert('New', 4);

// isAlpha 验证是否只有 alphabetic 字符 ，不能有 连线 ，下划线，数字
// echo S::create('丹尼尔aaaAAAff')->isAlpha();
// isAlphanumeric 验证是否只包含字符和数字
// echo S::create('ل1دانياAA')->isAlphanumeric();
// isBase64 验证是否是base64编码
// echo S::create('Zm9vYmFy')->isBase64();
// isBlank 验证是不是只包含空格回车等空字符串
// echo S::create("\r\n \r \n \t \v\f")->isBlank();
// isHexadecimal 验证字符是不是只有16进制内的字符
// echo S::create('AFB12109')->isHexadecimal();
// isJson 验证字符是不是JSON数据，方法与php7 保持一致，空字符集不算是JSON
// echo S::create('{"foo":"bar"}')->isJson();
// isSerialized 验证字符是不是serialize编码
// echo S::create('a:1:{s:3:"foo";s:3:"bar";}')->isSerialized();

// longestCommonPrefix 正向匹配最长的字符串
// longestCommonSuffix 反向匹配最长的字符串
// longestCommonSubstring 匹配最长的字符串，如果长度一致，返回第一个

