<?php
// accessing query patams

//$_GET Variables
print_r($_GET);

if (isset($_GET['s']) ) {
  echo "<p>Your Seach Term is: " . $_GET['s'];
}
?>

<form method="GET" action="">
  <label>Enter Search Term</label>
  <input type="search" name="s" value="<?php echo $_GET['s']; ?>">
</form>

<?php
//$_POST Variables

if (isset($_POST['s']) ) {
  echo "<p>Your Search Term is: " . $_POST['s'];
}
?>

<form method="POST" action="">
  <label>Enter Search Term</label>
  <input type="search" name="s" value="<?php echo $_POST['s']; ?>">
</form>