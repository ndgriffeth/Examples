<?php
session_id("xyz");
session_start();
echo "This is the first session:<br />";
var_dump($_SESSION);
?>