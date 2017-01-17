<?php

require dirname(__FILE__).'/../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();


// 示例 请求方法种类
$response = $client->get('http://httpbin.org/get');
// You can use the same methods you saw in the procedural API
// $response = $client->delete('http://httpbin.org/delete');
// $response = $client->head('http://httpbin.org/get');
// $response = $client->options('http://httpbin.org/get');
// $response = $client->patch('http://httpbin.org/patch');
// $response = $client->post('http://httpbin.org/post');
// $response = $client->put('http://httpbin.org/put');
$code = $response->getStatusCode();
var_dump($code);
$reason = $response->getReasonPhrase();
var_dump($reason);


// 示例 请求状态
// $request = $client->createRequest('GET', 'http://www.foo.com');
// $response = $client->send($request);
// $code = $response->getStatusCode();
// var_dump($code);
// $reason = $response->getReasonPhrase();
// var_dump($reason);
// $body = $response->getBody();
// var_dump($body);
// echo $body;

// 示例 异步处理
// $client->get('http://httpbin.org', ['future' => true])
//     ->then(function ($response) {
//         echo $response->getStatusCode();
//     });
// echo 1;

// 数据返回
// $response = $client->get('http://httpbin.org/get');
// $body = $response->getBody();
// while (!$body->eof()) {
//     echo $body->read(1024);
// }
// $json = $response->json();
// var_dump($json['origin']);

// $response = $client->get('https://github.com/mtdowling.atom');
// $xml = $response->xml();
// echo $xml->id;
// echo $xml->entry->author->name;
// echo $xml->entry->title['type'];
//


// 请求参数的生成方式
// $response = $client->get('http://httpbin.org?foo=bar');
// $client->get('http://httpbin.org', [
//     'query' => ['foo' => 'bar']
// ]);
// $request = $client->createRequest('GET', 'http://httpbin.org');
// $query = $request->getQuery();
// $query->set('foo', 'bar');
// // You can use the query string object like an array
// $query['baz'] = 'bam';

// // The query object can be cast to a string
// echo $query."\n";
// // foo=bar&baz=bam

// // Setting a value to false or null will cause the "=" sign to be omitted
// $query['empty'] = null;
// echo $query."\n";
// // foo=bar&baz=bam&empty

// // Use an empty string to include the "=" sign with an empty value
// $query['empty'] = '';
// echo $query."\n";
// // foo=bar&baz=bam&empty=

// 关于header的处理
// $response = $client->get('http://httpbin.org/get', [
//     'headers' => ['X-Foo-Header' => 'value']
// ]);
// echo $response->getHeader('X-Foo-Header');
// $response = $client->get('http://www.httpbin.org/get');
// $length = $response->getHeader('Content-Length');
// echo "length = ".$length."\n";
// $type = $response->getHeader('Content-Type');
// echo "type = ".$type."\n";

// $response = $client->get('Http://www.baidu.com');
// $values = $response->getHeader('set-cookie');
// $values = $response->getHeaderAsArray('set-cookie');
// $values = $response->getHeaders();
// var_dump($values);
// foreach ($values as $name => $values) {
//     echo $name . ": " . implode(", ", $values).chr(10);
// }

// $request = $client->createRequest('GET', 'http://httpbin.org/get');
// // Set a single value for a header
// $request->setHeader('User-Agent', 'Testing!');
// // Set multiple values for a header in one call
// $request->setHeader('X-Foo', ['Baz', 'Bar']);
// var_dump($request->getHeaders());
// // Add a header to the message
// $request->addHeader('X-Foo', 'Bam');
// var_dump($request->getHeaders());
// echo $request->getHeader('X-Foo').chr(10);
// // Baz, Bar, Bam
// // Remove a specific header using a case-insensitive name
// $request->removeHeader('x-foo');
// var_dump($request->getHeaders());
// echo $request->getHeader('X-Foo').chr(10);
// // Echoes an empty string: ''
//


// fields 提交，上传数据
// 可上传 row data  或者 resource 对应fopen打开文件
// $response = $client->post('http://httpbin.org/post', ['body' => 'raw data']);
// echo $response->getBody();
// 指定发送json格式的数据 使用 json 参数
// $response = $client->put('http://httpbin.org/put', ['json' => ['foo' => 'bar']]);
// echo $response->getBody();
// post参数的处理
// $response = $client->post('http://httpbin.org/post', [
//     'body' => [
//         'field_name' => 'abc',
//         'other_field' => '123'
//     ]
// ]);
// echo $response->getBody();
// post 发送之前，更改参数
// $request = $client->createRequest('POST', 'http://httpbin.org/post');
// $postBody = $request->getBody();
// // $postBody is an instance of GuzzleHttp\Post\PostBodyInterface
// $postBody->setField('foo', 'ba11r');
// $postBody->setField('foo2', 'ba11r2');
// echo $postBody->getField('foo').chr(10);
// // 'bar'
// echo json_encode($postBody->getFields()).chr(10);
// // {"foo": "bar"}
// // Send the POST request
// $response = $client->send($request);
// echo $response->getBody();
//
//

// files 上传文件相关
// use GuzzleHttp\Post\PostFile;
// $response = $client->post('http://httpbin.org/post', [
//     'body' => [
//         'field_name' => 'abc',
//         'file_filed' => fopen('/home/jeepyu/apps/initialise.sh', 'r'),
//         'other_file' => new PostFile('other_file', 'this is the content')
//     ]
// ]);
// echo $response->getBody();
// $request = $client->createRequest('POST', 'http://httpbin.org/post');
// $postBody = $request->getBody();
// $postBody->setField('foo', 'bar');
// $postBody->addFile(new PostFile('test', fopen('/home/jeepyu/apps/initialise.sh', 'r')));
// $response = $client->send($request);
// echo $response->getBody();


// cookies 
//
// redirects 重定向
// $response = $client->get('http://github.com');
// echo $response->getStatusCode().chr(10);
// // 200
// echo $response->getEffectiveUrl().chr(10);
// // 'https://github.com/'
// $response = $client->get('http://github.com', ['allow_redirects' => false]);
// echo $response->getStatusCode().chr(10);
// // 301
// echo $response->getEffectiveUrl().chr(10);
// // 'http://github.com/'


// exception 抛错 捕捉
// use GuzzleHttp\Exception\RequestException;
// try {
//     $client->get('https://github.com/_abc_123_404');
// } catch (RequestException $e) {
//     echo $e->getRequest().chr(10);
//     if ($e->hasResponse()) {
//         echo $e->getResponse().chr(10);
//     }
// }

// use GuzzleHttp\Exception\ClientException;
// try {
//     $client->get('https://github.com/_abc_123_404');
// } catch (ClientException $e) {
//     echo $e->getRequest();
//     echo $e->getResponse();
// }
