<?php
session_start();
echo "Session variables:<br />";
foreach ($_SESSION as $key=>$value) {
  echo $key."=>".$value.'<br />';
}
echo 'Now reset session variables with $_SESSION=array()<br />';
$_SESSION=array();
echo "Session variables:<br />";
foreach ($_SESSION as $key=>$value) {
   echo $key."=>".$value.'<br />';
}
?>