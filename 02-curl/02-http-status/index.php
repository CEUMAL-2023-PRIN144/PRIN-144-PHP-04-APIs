<?php 
$ch = curl_init();

// https://openweathermap.org/current#name

$url = "https://api.openweathermap.org/data/2.5/weather?q=Manila&appid=52ee2c931b68edd1b4cf7da03213b2dc";

curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true   
]);

$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "HTTP StatusCode: {$statusCode} \n";
echo "HTTP Response: {$response} \n";