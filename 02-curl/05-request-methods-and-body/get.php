<?php 
$ch = curl_init();

// https://crudcrud.com/api/{addressID}/{resource}/{resourceID}

$url = "https://crudcrud.com/api/fbadf015352e4e60828b444c432a449f/Person/656a2f55f3272103e8630f61";

curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

curl_close($ch);

echo "HTTP StatusCode: {$statusCode} \n";
echo "HTTP ContentType: {$contentType} \n";
echo "HTTP Response: {$response} \n";