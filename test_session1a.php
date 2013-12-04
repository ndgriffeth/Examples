<?php
session_id("05203hfqq9b6nvnmpclot661d5");
session_start();
$sid = session_id();
echo "Session id for first session is ".$sid.'<br />';
$_SESSION['whichSession'] = "first";
session_commit();

echo "Set session id for second session to abc<br />";
$new_sid = session_id("abc");
//session_start(); 
$_SESSION['whichSession'] = "second";
session_commit();

?>
<form action="first_session.php" method="post">
<input type="submit" value="First session">
</form>
<form action="second_session.php" method="post">
<input type="submit" value="Second session">
</form>