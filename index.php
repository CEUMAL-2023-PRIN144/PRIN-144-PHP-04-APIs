<?php

$response = file_get_contents("https://randomuser.me/api/");
//echo $response;

$data = json_decode($response, true);
//var_dump($data);
$firstName = $data['results'][0]['name']['first'];
//echo $firstName , "\n";

if( !empty($_GET["name"]) ) {
  $firstName = $_GET["name"];
  
  $agifyAPI = file_get_contents("https://api.agify.io/?name={$firstName}");
  $agifyResponse = json_decode($agifyAPI, true);

  $age = $agifyResponse["age"];
  //var_dump($agifyResponse);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <p>Enter your name, and I'll guess your age.</p>
  <form>
    <input type="text" id="name" name="name" placeholder="Your name..." />
    <button type="submit">Get Age</button>
  </form> 
  <?php if(isset($firstName) && isset($age)): ?>
    <h2>
      <?php echo "Hello, {$firstName}! Your age is {$age}."; ?>
    </h2>
  <?php endif; ?>
</body>
</html>