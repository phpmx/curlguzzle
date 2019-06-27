<?php

$ch = curl_init("http://httpbin.org");
curl_setopt($ch, CURLOPT_USERPWD, "usuario:acceso");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, true);

$verbose = fopen('php://temp', 'w+');
curl_setopt($ch, CURLOPT_STDERR, $verbose);

$response = curl_exec($ch);

curl_close($ch);
ob_start();
// $jsonresponse = json_decode($response, true); // Parsear el resultado como JSON
ob_start();
rewind($verbose);
$verboseLog = stream_get_contents($verbose);
echo $verboseLog;

?>