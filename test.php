<?php

function toUppercase($string){
  echo ucwords($string);
}

toUppercase('hello world');

$arr = array('kevin', 'guertin');
echo count($arr);
echo ucwords($arr[0]);

// for ($i = 0; $i < count($arr); $i++ ) {
//   echo "the value is: ".ucwords($arr[$i])."</br>";
// };

foreach ($arr as $value) {
  echo "The value is: ".ucwords($value)."<br>";
};

class obj {
  public $name = 'Kevin Guertin';
  public $age = 30;
  public $developer = true;
};

if (obj.developer) {
  echo "I am a developer";
} else {
  echo "I am not a developer";  
}
  
  
?>