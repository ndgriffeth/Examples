<?php
session_start();
// if this is the first time the session has been started,
// there will be no count in $_SESSION
if (!isset($_SESSION['count'])) {
  // set to 0 on first time through
  $_SESSION['count'] = 0;
} else {
  // add 1 after the first time
  $_SESSION['count']++;
}
echo $_SESSION['count'];

?>
<form action="count.php" method="post">
<input type="Submit" value="Next">
</form>
<form action="quit.php" method="post">
<input type="Submit" value="Quit">
</form>