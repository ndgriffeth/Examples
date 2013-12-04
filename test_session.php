<?php
session_start();
echo "Session id is ".session_id().'<br />';
?>
<html>
<body>
<form action="test_session.php" method="post">
<input type="submit">
</form>
</body>
</html>