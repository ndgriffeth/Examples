<?php
$myarray = range('a', 'z');

while (list($key, $value) = each($myarray)) {
    echo $key." => ".$value."<br />";
}
?>