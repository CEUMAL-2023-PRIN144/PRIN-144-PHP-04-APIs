<?php 
$ch = curl_init();

// https://crudcrud.com/api/{addressID}/{resource}

$url = "https://crudcrud.com/api/fbadf015352e4e60828b444c432a449f/Person";

$headers = [
  "Content-Type: application/json"
];

$payload = json_encode([
  "lastName" => "ONeil",
  "givenName" => "Shaq",
  "age" => 32
]);

curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POSTFIELDS => $payload              
]);

$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

curl_close($ch);

echo "HTTP StatusCode: {$statusCode} \n";
echo "HTTP ContentType: {$contentType} \n";
echo "HTTP Response: {$response} \n";