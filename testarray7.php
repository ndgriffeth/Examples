<?php
$myarray = range('a', 'z');
array_walk($myarray, 'my_print');

function my_print($value)
{
   echo "$value<br />";
}
?>
