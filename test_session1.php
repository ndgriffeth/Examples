<?php
session_start();
var_dump($_SESSION);
$_SESSION['second']="second";
echo '<br />';
echo 'session_name() '.session_name().'<br />';
echo 'session_save_path() '.session_save_path().'<br />';
$params=session_get_cookie_params();
echo 'session_get_cookie_params()';
var_dump($params);
echo '<br />';
?>