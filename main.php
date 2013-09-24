<h1>Nancy's Super Web Site</h1>

<?php
$yourname = $_POST['name'];
$password=$_POST['password'];
echo "<p>";
date_default_timezone_set("America/New_York");
echo "Order processed at".date('H:i, jS F Y');
echo "<p>You are ";
echo $yourname;
echo "</p><p>Your password is ";
echo $password;
echo "</p>";
?>
