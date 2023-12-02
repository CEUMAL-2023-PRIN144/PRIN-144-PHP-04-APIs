<?php 
$ch = curl_init();

// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api/");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($ch, [
  CURLOPT_URL => "https://randomuser.me/api/",
  CURLOPT_RETURNTRANSFER => true   
]);

$response = curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$data = json_decode($response, true);

curl_close($ch);

echo "HTTP StatusCode: {$statusCode} \n";
echo "HTTP Response: {$response} \n";
echo "FirstName: {$data['results'][0]['name']['first']} \n";