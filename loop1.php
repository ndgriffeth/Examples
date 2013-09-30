
<?php
echo '<p>$_POST is: </p>';
foreach($_POST as $key=>$entry) {
   echo "<p>$key=>$entry</p>";
}

echo '<p>$_GET is: </p>';
foreach($_GET as $key=>$entry) {
   echo "<p>$key=>$entry</p>";
}

echo '<p>$_REQUEST is: </p>';
foreach($_REQUEST as $key=>$entry) {
   echo "<p>$key=>$entry</p>";
}
