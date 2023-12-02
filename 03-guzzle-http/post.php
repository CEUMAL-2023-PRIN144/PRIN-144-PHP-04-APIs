<?php
require_once("../vendor/autoload.php");
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;

$client = new GuzzleHttp\Client();
$url = "https://crudcrud.com/api/fbadf015352e4e60828b444c432a449f/Person";

$payload = [
  "lastName" => "Bryant",
  "givenName" => "Kobe",
  "age" => 24
];

try {
  $response = $client->request("POST", $url, [
    "headers" => [
      "Content-Type" => "application/json",
    ],
    "json" => $payload
  ]);

  echo "HTTP StatusCode: {$response->getStatusCode()} \n";
  echo "HTTP Response: {$response->getBody()} \n";
} catch (ClientException $e) {
  echo Psr7\Message::toString($e->getRequest());
  echo Psr7\Message::toString($e->getResponse());
}

