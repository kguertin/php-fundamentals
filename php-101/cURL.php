<?php
error_reporting(E_ALL);
ini_set('display errors', 1);

//Basic curl example
//1. Initialize

$ch = curl_init();

//2. Set Options
//URL to send the request to
curl_setopt($ch, CURLOPT_URL, 'http://www.google.com');

//Return instead of outputting directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Wether to include the header in the output, set to false here (0)
curl_setopt($ch, CURLOPT_HEADER, 0);

//3. Execute the request and fetch the response. Check for errors.
$output = curl_exec($ch);

if ($output === FALSE) {
  echo "cURL Error: " . curl_error($ch);
}

curl_close($ch);

// print_r($output);

//POST data with cURL
$url = 'https://postman-echo.com/post';
$post_data = array(
'query' => 'some stuff',
"method" => 'post',
'ya' => 'hoo'
);

//2. Initialize
$ch = curl_init();

//3.Set Options
//Url to submit to
curl_setopt($ch, CURLOPT_URL, $url);

//Return transfer option to true
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//We are doing a post request
curl_setopt($ch, CURLOPT_POST, 1);

// Adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
 
$output = curl_exec($ch);

if($output === FALSE) {
  echo "cURL Error: " . curl_error($ch);
}

//Close and free up the curl handle
curl_close($ch);
  
// print_r($output); //Postman endpoint returns json

//uSING cURL WITH HTTPS
$ch = curl_init();
  
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_HEADER, 0);

$output = curl_exec($ch);

if($output === FALSE) {
  echo "cURL Error: " . curl_error($ch);
}

curl_close($ch);

print_r($output);

//Sometimes run into error issue with https requests CURLOPT_SSL_VERIFYPEER set to false, this is not the best security process as it exposes data to man in the middle attacks.
//Instead set up your server to handle these ssl reuqests.
// Can install the ssl bundle on server and point to this certification through curl requests.

?>