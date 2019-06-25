<?php

$ch = curl_init("http://www.example.com/");
$ch = curl_init("https://api.github.com/repos/guzzle/guzzle");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);

?>