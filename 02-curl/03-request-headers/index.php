<?php 
$ch = curl_init();

// https://unsplash.com/documentation#getting-started

$url = "https://api.unsplash.com/photos/random";

$headers = [
  "Authorization: Client-ID 4a70cTom1WxYm2QUcWumD3pIhCplRezyh8rCdgVlrww"
];

curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);
$response = substr($response, 0, 350) . "...";
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "HTTP StatusCode: {$statusCode} \n";
echo "HTTP Response: {$response} \n";