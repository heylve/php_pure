<?php
require __DIR__ . '/vendor/autoload.php';

$client = new GuzzleHttp\Client();
// $res = $client->request('GET', 'https://api.github.com/user', [
//     'auth' => ['user', 'pass']
// ]);
$res = $client->request('GET', 'http://www.telepoche.fr');
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://www.alphalink.fr');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();