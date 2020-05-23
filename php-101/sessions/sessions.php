
<?php
  //sessions as superglobals to pass data form page to page. can use information from post and get params.
  //Content is stored in the server, usually a temp folder. There are config options php.session.save.path
  //Sessions identified by session Id stored in the browser, sent with each request

  session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <p>Session variables to start</p>
    <?php print_r($_SESSION); ?>
    <?php 
      //Set Session Varibles
    $_SESSION['name'] = 'Kevin';
    $_SESSION['status'] = "Is looking for a Job";
    ?>
    <p>Session variables set. <a href="m214-2.php">Click Here to Check</a></p>
    <p><?php print_r($_SESSION); ?></p>
    
  </body>
</html>