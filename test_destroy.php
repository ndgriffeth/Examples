<?php
session_start();
echo "Start<br />";
if (isset($_SESSION['count'])) {
	echo "Count is ".$_SESSION['count'].'<br />';
} else {
	echo "Count is not set<br />";
}
session_destroy();
if (isset($_SESSION['count'])) {
	echo "Count is ".$_SESSION['count'].'<br />';
} else {
	echo "Count is not set<br />";
}
echo "End<br />";
?>