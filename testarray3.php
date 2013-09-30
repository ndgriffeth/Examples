<?php
$myarray = range('a', 'z');

while ($entry = each($myarray)) {
    echo($entry[0])." => ".$entry[1]."<br />";
}
?>