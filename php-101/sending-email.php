<?php
  //Recipient
$to = 'kevin.m.guertin@gmail.com';

//Subject
$subject = 'This is a test email!';

//Message 
$message = '<h1>Hi There.</h1><p>Thanks for testing!</p>';

//Header
$headers = "From: The Sender Name <phpemailtest@test.com>\r\n";
$headers .="Reply-To: replyto@phptest.com\r\n"; 
$headers .= "Content-type: text/html\r\n";

//Send Email
mail($to, $subject, $message, $headers);

?>