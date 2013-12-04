<?php
session_id("abc");
session_start();
echo "This is the second session:<br />";
var_dump($_SESSION);
?>