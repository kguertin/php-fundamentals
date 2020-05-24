<?php
  $variable_in_global_scope = "Hi, i am global";

function my_func() { //FUnctions dont have access to global variables in local scope (Like Ruby?)
  global $variable_in_global_scope; //access global scope variable, pointing to this specifically
  global $variable_in_local_scope; //can also do the reverse and make a local variable global
  $variable_in_local_scope = "Drat! I'm just local";
  
  echo $variable_in_local_scope;
  echo "<br />";
  echo $variable_in_global_scope;
}

my_func();
echo "<br />";
echo $variable_in_local_scope; //Also cannot access local variables globally, but this is expected.
?>