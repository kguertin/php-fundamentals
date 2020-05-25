<?php
  error_reporting(E_ALL);\
  ini_set('display_errors', 1);

//An alternitive to cURL

//Setup
$url = 'https://postman-echo.com/post';
$data = array('I' => 'Think', 'Kevin' => 'Guertin', 'Should' => 'Get a Job');

//Set Options 
$options = array(
  'http' => array(
    'header' => "Content Type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($data), //Param values, build these out for url
  ),
);

// Create the stream context
$context = stream_context_create($options); //Turn the opption array into what need to be passed into the stream

//Send the request
$result = file_get_contents($url, false, $context); //false is the include path option, then passing in the options to send request 

if ($result === FALSE) {
   // Handle Errror
}

print_r($result);

$google = file_get_contents('https://www.google.com');
print_r($google);

?>