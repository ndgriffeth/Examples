<?php
session_start();
echo "Session id is ".session_id()."<br />";
echo "Session variables are: <br />";
foreach($_SESSION as $key=>$value) {
	echo $key."=>".$value."<br />";
}
?>