<?php
function echo_stuff() {
  echo 'Hey Boss<br />';
}

echo_stuff();

//Function Arguments
function my_name($name) {
  echo $name;
}

my_name('Kevin<br />');
my_name('Joe<br />');

//Default Arguments
function full_name($firstname = "Kevin", $lastname = "Guertin") {
  echo $firstname . " " . $lastname;
}

full_name();
echo "<br />";
full_name("Joe", "Blow");
echo "<br />";

//Return Values
function multiply( $number, $multiplier ) {
  return $number * $multiplier;
}

echo multiply(2, 2);
echo "<br />";
echo multiply(4, 4);
echo "<br />";

function divide_by_2($number){
  return $number / 2;
}

function print_stuff($argument, $function){
  if($function){
    echo $function($argument);
  } else {
    echo $argument;    
  }
}

print_stuff(4, null);
echo "<br />";
print_stuff(4, 'divide_by_2'); // This is passing in a callback function has to be in quotes


?>