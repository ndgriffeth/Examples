<?php
$a=$_POST['name'];
var_dump($a);
echo '<br />';

$x = test($a);
echo $x;

function test($x)
{
     $b = ereg("def", $x);
     echo $b;
     return $b;
}
?>