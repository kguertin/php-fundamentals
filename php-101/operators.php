<?php
echo '<h1>Comparison Operators</h1>';
// Equality
//Equal
echo '1. ';
if (1 == 2) {
  echo 'true<br />';
} else {
  echo 'false<br />';
}

//Not Equal
echo '2. ';
if(1 != 2){
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Identical 
echo '3. ';
if(1 === '1') {
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Not Identical
echo '4. ';
if(1 !== '1') {
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Compare
// Less Than, greater than
echo '5. ';
if(1 < 2) {
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Greater than, less than or equal to
echo '6. ';
if(1 <= '1') {
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Not equal after type coercion
echo '7. ';
if(1 <> '1') {
  echo 'true <br />';
} else {
  echo 'false <br />';
}

// Spaceship (php7). runs all three and returns -1, 0, 1 depending on the result. 
echo '8. ';
if (1 <=> 2) {
  echo 'true<br />';
} else {
  echo 'false<br />';
}

// Null Coalesce. reads left to right and returns the first value that is not null (php 7)
$b = 12;
echo '9. ';
echo $a ?? 1;
echo '<br />10. ' ;
echo $a ?? $b ?? 3;

echo '<h1>Logical Operators</h1>';
  
  // And && opperator, both must be true
 echo '12. ';
if (1 == '1' && 2 < 4) {
  echo 'true<br />';  
} else {
  echo 'false<br />';
}

// OR ||, one or the other must be true
 echo '13. ';
if (1 == '1' || 2 > 4) {
  echo 'true<br />';  
} else {
  echo 'false<br />';
}

// Not
$var0 = 0;
$var1 = 1;
$var2 = false;
$var3 = true;

if (! $var0) {
  echo '14. true<br />';
}

if (! $var1) {
  echo '15. true<br />';
}

if (! $var2) {
  echo '16. true<br />';
}

if (! $var3) {
  echo '17. true<br />';
}






?>