<?php 
$response = file_get_contents("https://randomuser.me/api/");

$data = json_decode($response, true);
//var_dump($data);
$firstName = $data['results'][0]['name']['first'];

$response = file_get_contents("https://api.agify.io/?name={$firstName}");
$data = json_decode($response, true);
$age = $data['age'];

//var_dump($data);

echo "Your name is {$firstName}, age is {$age}. \n";
?>