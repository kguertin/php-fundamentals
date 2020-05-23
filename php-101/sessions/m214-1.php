<?php
  session_start();
  session_unset(); //removes variables but leave the session
  session_destroy(); //Destroy the session. 
?>

<!DOCTYPE html>
<html>
  <body>
    <p><?PHP print_r($_SESSION); ?></p>
    <p><a href="sessions.php">Click Here to Start Over</a></p>
  </body>
</html>
