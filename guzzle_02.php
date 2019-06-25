<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);

$options = [
    'json' => [
        "fruit" => "apple"
       ]
   ]; 

$response = $client->post("/post", $options);

echo $response->getBody();

?>