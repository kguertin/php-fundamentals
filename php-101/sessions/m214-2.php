<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <p><?php print_r($_SESSION) ?></p>
    <p>Name: <?php echo $_SESSION['name'] ?></p>
    <p>Statu: <?php echo $_SESSION['status'] ?></p>
    <p><a href="m214-1.php">Click to Destroy Sesions</a></p>
  </body>
</html>
