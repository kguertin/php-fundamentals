<?php
  //For Loopf
  for($i = 1; $i <= 10; $i+=2) {
    echo "$i<br>";
  }

//For Each - used for arrays often for database responses
$arr = array("name", "email", "address");

// foreach ($arr as $data) {
//   echo "$data<br />";
// }

print_r($arr);
echo "<br />";

foreach ($arr as $key=>$value) {
  echo "key $key: $value<br />";
};

//While Loops
$i = 0;
while ($i <= 20) {
  echo "$i<br />";
  $i+=2; 
};

$i = 0;
$arr = array('Lowry', "Gasol", "Siakam");
echo count($arr) . "<br />";

while ($arr[$i]) {
  echo "$arr[$i]<br />";
  $i++;
};

?>
