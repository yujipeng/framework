<?php
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;

class HttpTest extends TestCase {

    private $baseurl = 'http://httpbin.org/';


    private function getHttpClient($baseurl, $timeout = 2.0 ){
        $client = new Client([
            'base_uri' => $baseurl, 
            'timeout'  => $timeout,
        ]);
        return $client;
    }

    /*
    public function testGet(){

        $client = $this->getHttpClient($this->baseurl);
        // // 默认方法
        $response = $client->request('GET', 'get');
        $this->checkResponse($response);
        // 创建请求
        $request = new Request('GET', 'http://httpbin.org/get');
        $response = $client->send($request, ['timeout' => 2]);
        $this->checkResponse($response);
        // 简单方法
        $response = $client->get('http://httpbin.org/get');
        $this->checkResponse($response);
        // 传递参数
        $response = $client->request('GET', 'http://httpbin.org/get', [
            'query' => ['foo' => 'bar']
        ]);
        $this->checkResponse($response);
        
    }
    // */
    /*
    public function testPost(){
        $client = $this->getHttpClient($this->baseurl);
        // 默认方法
        $response = $client->request('POST', 'post');
        $this->checkResponse($response);
        // 创建请求
        $request = new Request('POST', 'http://httpbin.org/post');
        $response = $client->send($request, ['timeout' => 2]);
        $this->checkResponse($response);
        // 简单方法
        $response = $client->post('http://httpbin.org/post');
        $this->checkResponse($response);
        // 传递参数
        $response = $client->request('POST', 'http://httpbin.org/post', [
            'query' => ['foo' => 'bar'],
            // 'body'  => 'raw data',
            // 'body'  => fopen(__DIR__.'/../phpunit.sh', 'r'),
            // 'body'  => \GuzzleHttp\Psr7\stream_for('hello!'),
            // 'form_params' => [
            //     'field_name'    => 'abc',
            //     'other_field'   => '123',
            //     'nested_field'  => [
            //         'nested'    => 'hello',
            //         'nested1'   => 'world',
            //     ],
            // ],
            'multipart'  => [
                [
                    'name'      => 'field_name',
                    'contents'  => 'abc',
                ],
                [
                    'name'      => 'file_name',
                    'contents'  => fopen(__DIR__.'/../phpunit.sh', 'r'),
                ],
                [
                    'name'     => 'other_file',
                    'contents' => 'hello',
                    'filename' => 'filename.txt',
                    'headers'  => [
                        'X-Foo' => 'this is an extra header to include'
                    ]
                ],
            ],
        ]);
        $this->checkResponse($response);
    
    
    }
    // */
    /*

    public function testPut(){
        $client = $this->getHttpClient($this->baseurl);
        // 默认方法
        $response = $client->request('PUT', 'put');
        $this->checkResponse($response);
        // 创建请求
        $request = new Request('PUT', 'http://httpbin.org/put');
        $response = $client->send($request, ['timeout' => 2]);
        $this->checkResponse($response);
        // 简单方法
        $response = $client->put('http://httpbin.org/put');
        $this->checkResponse($response);
        // 传递参数
        $response = $client->request('PUT', 'http://httpbin.org/put', [
            'json' => ['foo' => 'bar'],
        ]);
        $this->checkResponse($response);

    }
    // */
    /*
    public function testCookies(){
        $client = $this->getHttpClient($this->baseurl);
        // 默认方法
        $response = $client->request('GET', 'cookies');
        $this->checkResponse($response);
        // Use a specific cookie jar
        $jar = new \GuzzleHttp\Cookie\CookieJar;
        $response = $client->request('GET', 'http://httpbin.org/cookies', [
            'cookies' => $jar
        ]); 
        $this->checkResponse($response);
        // Use a shared client cookie jar
        $client = new \GuzzleHttp\Client(['cookies' => true]);
        $response = $client->request('GET', 'http://httpbin.org/cookies'); 
        $this->checkResponse($response);
    }
    // */
    // /*
    public function testRedirect(){
        $client = $this->getHttpClient($this->baseurl);
        // 默认方法
        $response = $client->request('GET', 'http://github.com', [
            'allow_redirects' => true,
        ]);
        $this->checkResponse($response);
        
    }
    // */
    /*
    public function testException(){
        $client = $this->getHttpClient($this->baseurl);
        // try {
        //     $client->request('GET', 'https://github.com/_abc_123_404');
        // } catch (RequestException $e) {
        //     echo $e->getRequest();
        //     if ($e->hasResponse()) {
        //         echo $e->getResponse();
        //     }
        // }


        try {
            $client->request('GET', 'https://github.com/_abc_123_404');
        } catch (ClientException $e) {
            echo $e->getRequest();
            echo $e->getResponse();
        } 
    }
    // */
    // /*
    private function checkResponse($response){
    
        $this->assertEquals('200', $response->getStatusCode());
        $this->assertEquals('OK', $response->getReasonPhrase());
        // $this->assertTrue($response->hasHeader('Content-Length'));
        // Get all of the response headers.
        foreach ($response->getHeaders() as $name => $values) {
            echo $name . ': ' . implode(', ', $values) . "\r\n";
        }
        // echo $response->getBody();
    
    }




}
