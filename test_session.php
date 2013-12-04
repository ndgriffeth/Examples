<?php
session_start();
var_dump($_SESSION);
$_SESSION['first']="first";
echo '<br />';
echo 'session_name() '.session_name().'<br />';
echo 'session_save_path() '.session_save_path().'<br />';
$params=session_get_cookie_params();
echo 'session_get_cookie_params()';
var_dump($params);
echo '<br />';
?>
<html>
<body>
<form action="test_session1.php" method="post">
<input type="submit">
</form>
</body>
</html>