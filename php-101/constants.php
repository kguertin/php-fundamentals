<?php
//SImilar to variables. COnfig file to use thorough code. Database values. Available in all scopes.
//Case sensitive. Capitalize constants
define('NAME', 'Kevin');

//Case insensitive. bool is case option flase by default
define('LAST', "Guertin", true);

echo NAME;
echo "<br />";
echo LAST;
echo "<br />";
echo last;
echo "<br />";

function my_func(){
  echo NAME . " " . LAST;
}

my_func();

?>