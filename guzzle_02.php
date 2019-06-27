<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.org"]);
// $client = new \GuzzleHttp\Client(["base_uri" => "http://httpbin.rg"]); //Disparar la excepcion

$options = [
    'debug' => true,
    'http_errors' => true, // false para deshabilitar la excepcion
    'json' => [
        "fruit" => "apple"
       ]
   ]; 
try {
    $response = $client->post("/post", $options);
}
catch (Guzzle\Http\Exception\ClientErrorResponseException $e) {
    $req = $e->getRequest();
    $resp =$e->getResponse();
    displayTest($req,$resp);
}

echo $response->getBody();

?>