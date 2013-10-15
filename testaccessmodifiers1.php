<?php
include('testaccessmodifiers.php');
echo "Demonstrate that (apparent) direct access is through the getter<br />";

$a = new TestPublic();
echo "Access private variables through their own getvar functions<br />";
echo $a->getVar1()."<br />";
echo $a->getVar2()."<br />";
echo "<br />";

echo "Access private variables directly<br />";
echo $a->var1."<br />";
echo $a->var2."<br />";
echo "<br />";

echo "Access private variables through __get<br />";
echo $a->__get('var1')."<br />";
echo $a->__get('var2')."<br />";

?>