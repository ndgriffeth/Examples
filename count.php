<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
echo $_SESSION['count'];

?>
<form action="count.php" method="post">
<input type="Submit" name="Continue">
</form>
<form action="quit.php" method="post">
<input type="Submit" name="Quit">
</form>