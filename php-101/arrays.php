<?php 
// Indexed Array 
$array = array('name', 'email', 'address');
// Cannot echo an array
print_r($array);
echo $array[0];

//Another way to make arrays
$array2[] = 'salad';
//Can add to array like this
$array2[]='not salad';
print_r($array2);

// Also assocuative arrays
$array3 = array('name' => 'John', 'age' => 30);
print_r($array3);
echo $array3['name'];
?>