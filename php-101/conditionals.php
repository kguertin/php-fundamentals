<?php 

$number = 4;
$number2 = '1';
$number3 = 3;

//&& and || like JS 

if ($number !== $number2 || $number == $number3) {
  echo 'true';
} else {
  echo 'false';
};

//Switches
switch($number) {
  case 1: 
    echo 'true';
    break;
  case 2: 
    echo 'false';
    break; 
  case 'three' :
    echo 'three';
    break;
  default:
      echo 'no idea';
};

?>