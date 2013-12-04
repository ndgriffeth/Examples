<?php
session_start();
echo "Count is ".$_SESSION['count'].'<br />';
echo "Increment count in session<br />";
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
echo "Count is ".$_SESSION['count']."<br />";
session_commit();
echo "Increment count after commit<br />";
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
echo "Count is ".$_SESSION['count'].'<br />';
session_start();
echo "Restart session and look at count<br />";
echo "Count is ".$_SESSION['count'].'<br />';
?>
<form action="test_commit_next.php" method="post">
<input type="submit">
</form>