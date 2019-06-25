<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); # 200
echo "\n";
echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
echo "\n";
echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'

?>