<?php
// $variable = "Hello World";

// Can escape like JS and also has string interpolation as seen below.
$variable = 'I\'m a variable';

// Can concat with . 
echo "My name is " . "Kevin";
  
echo "{$variable} and I dont Care!";

$number = 33;
$number = $number * 2 / 3;

// variable variable allows to point to another variable
$a = "number";

echo "This is the number " . $$a;
 ?>


