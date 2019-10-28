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

// 简单示例
// create 创建给定字符串，后续可以使用链式处理
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

// 常用方法
// length 统计字符数
// $stringy = S::create('fòôbàř'); 
// echo count($stringy).chr(10);
// echo S::create('fòôbàř')->length(); 
// chars 字符集数组形式转换
// $stringy = S::create('fòôbàř')->chars();; 
// var_dump($stringy);
// repeat 基于给定字符串，重复指定次数, 等同于 多字符集的 str_repeat
// echo S::create('foo')->repeat(3);
// substr 与slice 相同点 第一参数是开始位置start， 不同点 第二参数是截取长度，默认为空
// echo S::create('fòôbàř')->substr(2, 3);
// slice 截取指定字符串，第二参数是结束为止 end 
// echo S::create('fòôbàř')->slice(3, -1);
// reverse 反转给定字符串，反顺序输出，等同于 多字符集版本的 strrev
// echo S::create('fòôbàř')->reverse();
// shuffle 在给定字符串上，打乱顺序组合输出 等同于 多字符集的 str_shuffle
// echo S::create('fòôbàř')->shuffle();
// split 分割字符串，用指定的正则表达式分割；第二参数：返回指定的数据集的前n个，默认全部
// $split_list = S::create('foo,bar,baz')->split(',', 2);
// foreach($split_list as $str) echo $str.chr(10);
// lines 按照行回车分割成数组，返回数组
// $lines = S::create("fòô\r\nbàř\n")->lines();
// foreach($lines as $line) echo $line.chr(10);

// 字符串前缀后缀处理
// append 在字符串结尾处附加字符 
// echo S::create('test')->append('aaaàř').chr(10);
// prepend 在字符串开始处附加字符 
// echo S::create('test')->prepend('aaaàř').chr(10);
// startsWith 判断是否是指定字符串开始，第二参数 是大小写敏感，true敏感，false不敏感，default=true
// echo S::create('foo bar')->startsWith('Foo', false);
// endsWith 判断是否以指定字符结尾 第二参数 是 大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('foo bar')->endsWith('Bar', false);
// ensureLeft 确定字符以指定字符开始，如果没有，自动添加
// echo S::create('foobar')->ensureLeft('http://');
// ensureRight 确定字符以指定字符结束，如果没有，自动添加
// echo S::create('foobar')->ensureRight('.com');
// removeLeft 检查字符串，是否以指定字符串开始，如果是，自动去除
// echo S::create('http://foobar.com')->removeLeft('http://');
// removeRight 检查字符串，是否以指定字符串结束，如果是，自动去除
// echo S::create('http://foobar.com')->removeRight('.com');
// surround 在给定字符串两侧，使用指定字符串环绕
// echo S::create('  ͜ ')->surround('ʘ');

// 与索引位置有关的处理
// at 返回对应索引的字符
// echo S::create('test')->at(3).chr(10);
// first 返回前几个字符
// echo S::create('test begin')->first(2);
// last 返回后几个字符
// echo S::create('test begin')->last(2);
// indexOf 获取对应字符串的索引位置
// echo S::create('string')->indexOf('ing');
// indexOfLast 获取对应字符串的最后一次出现的索引位置
// echo S::create('foobarfoo')->indexOfLast('foo');
// insert 在字符集的指定索引位置，添加指定字符
// echo S::create('testFoobar')->insert('New', 4);

// 类似命名方式的处理，组合处理
// camelize  驼峰式处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('test Camel_sizeAct-level')->camelize();
// dasherize 横线连接处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('FooBaa_sss_EEE-fff tttt')->dasherize();
// delimit 指定字符连接处理 ，处理字符 包括 空格 下划线 连接线
// echo S::create('fooBar_test_FF tt')->delimit('->');
// humanize 单词处理，将字符串中的首字符大写，去掉 下划线之后的字符
// echo S::create('auther_id')->humanize();
// slugify 金属块方式处理，按照指定字符连接处理，包括空格，下划线，大写变小写，非ASCII变相近的ASCII
// echo S::create('Using strings_like fòô bàř')->slugify();
// underscored 下划线连接处理，处理字符 包括 空格，连接线
// echo S::create('TestUCase Test-Other')->underscored();
// upperCamelize 首字母大写的驼峰式处理
// echo S::create('test Upper-Camel_case')->upperCamelize();

// 大小写处理
// toLowerCase 转换所有字符为小写  alias  mb_strtolower
// echo S::create('FÒÔBÀŘ')->toLowerCase();
// toUpperCase  转换所有字符为大写  alias  mb_strtoupper
// echo S::create('fòôbàř')->toUpperCase();
// toTitleCase 单词的首字母大写 
// echo S::create('foo fòô bàř bar')->toTitleCase();
// hasLowerCase 检查字符串中是否包含小写字母
// echo S::create('FOOaBAR')->hasLowerCase();
// hasUpperCase 检查字符串中是否包含大写字母
// echo S::create('foobarA')->hasUpperCase();
// isLowerCase 检查字符串中是否都是小写字母
// echo S::create('foobar')->isLowerCase();
// isUpperCase 检查字符串中是否都是大写字母
// echo S::create('FOOBAR')->isUpperCase();
// lowerCaseFirst 首字符小写处理
// echo S::create('FOOBAR')->lowerCaseFirst();
// upperCaseFirst 首字母大写处理
// echo S::create('foobar')->upperCaseFirst();
// swapCase 大小写互换
// echo S::create('ΝτανιλabtfABTF')->swapCase();

// 特殊字符转换
// htmlEncode() 转换字符到html entities
// echo S::create('&')->htmlEncode();
// htmlDecode() 转换 html entities  到 常用字符
// echo S::create('&lt;')->htmlDecode();
// tidy 转换 word 文件中特殊字符到相应的ASCII对应赐福
// echo S::create('“I see…”')->tidy();
// toAscii 转换特殊字符到ascii字符
// echo S::create('fòôbàř')->toAscii();
// toBoolean 转换相应的字符为布尔变量
// 比如 'true' , 1, 'on', 'yes' -> true; 'false', 0, 'off', 'no' -> false ; 忽略大小写
// echo S::create('ON')->toBoolean();

// 字符类型验证处理
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

// 字符串匹配 匹配检查
// between 在字符集中间的数据返回 
// echo S::create('{foo} and {bar}')->between('{', '}').chr(10);
// contains 检查是否包含字符串 第二参数 是 大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('Ο συγγραφέαςa είπε')->contains('συγγραφέαςA', false);
// containsAll 检查给定字符串中是否包含指定字符串的所有。
// echo S::create('Foo & bar')->containsAll(['bar', 'foo'], false);
// containsAny 检查给定字符串中是否包含指定字符串集中的任意一个。
// echo S::create('str contains Foo ')->containsAny(['bar', 'foo'], false);
// countSubstr 检查字符串出现的次数 第二参数是大小写敏感  true 敏感 ；false 不敏感 ; default = true;
// echo S::create('Ο συγγραφέας είπε aa A')->countSubstr('a', false);
// longestCommonPrefix 正向匹配最长的字符串，从第一个字符开始
// echo S::create('bar fooob foobar')->longestCommonPrefix('bar fro');
// longestCommonSuffix 反向匹配最长的字符串，从最后一个字符开始
// echo S::create('bar fooob foobar')->longestCommonSuffix('ffobar');
// longestCommonSubstring 匹配最长的字符串，如果长度一致，返回第一个
// echo S::create('bar fooob foobar')->longestCommonSubstring('fooobar');

// 字符串补充
// pad 在给定字符串上，填充字符串到指定长度 
// pad(int $length [, string $padStr = ' ' [, string $padType = 'right' ]])
// 第一参数是长度，第二参数是填充字符，第三参数是方向类型，left 左侧，right 右侧，both 两侧
// echo S::create('foo bar')->pad('10', '-/', 'left');
// padBoth 在给定字符串上往两侧填充字符到指定长度
// echo S::create('foo bar')->padBoth('12', '-/');
// padLeft 在给定字符串左侧填充指定字符到指定长度
// echo S::create('foo bar')->padLeft('12', '-/');
// padRight 在给定字符串右侧填充指定字符到指定长度
// echo S::create('foo bar')->padRight('12', '-/');

// 字符串替换
// replace 在给定字符串中，搜索指定字符串，按照替换字符串进行替换
// echo S::create('fòô bàř fòô bàř')->replace('fòô ', 'test');
// regexReplace 按照指定正则表达式，匹配给定字符串，进行相应正则替换
// echo S::create('fòô ')->regexReplace('f[òô]+\s', 'bàř').chr(10);
// echo S::create('fò')->regexReplace('(ò)', '\\1ô').chr(10);
// echo S::create('foo bar foobar')->regexReplace('^(foo) ?(bar)', '\\11\\2').chr(10);

// 格式化的处理
// truncate 截断处理，第一参数是长度，第二参数是补充字符串
// echo S::create('what are your plans today?')->truncate(20, '...');
// safeTruncate 安全截断，不会截断单词，第二参数是补充字符串
// echo S::create('what are your plans today?')->safeTruncate(20, '...');
// toSpaces 转换tab为一定数量的空格，默认是4个空格，可参数指定
// echo S::create(' String speech = "Hi"')->toSpaces();
// toTabs 转换一定数量的空格为tab，默认是4个空格，可参数指定
// echo S::create('   foo    bar to  ba   fo')->toTabs();
// collapseWhitespace 空格合并处理
// echo S::create(' sf wesd oosd fòô     bàř')->collapseWhitespace();
// trim 去除字符串两侧的空格，参数可以指定字符集
// echo S::create('ab  fòôbàř  ba')->trim('ab');
// trimLeft 去除字符串左侧的空格，参数可以指定字符集
// echo S::create('ab  fòôbàř  ba')->trimLeft('ab');
// trimRight 去除字符串右侧的空格，参数可以指定字符集
// echo S::create('ab  fòôbàř  ba')->trimRight('ab');
// titleize 每个单词的首字母大写处理，第二参数是可忽略单词，可以是数组
// $ignore = ['at', 'by', 'for', 'in', 'of', 'on', 'out', 'to', 'the'];
// echo S::create('i like to watch television')->titleize($ignore);

