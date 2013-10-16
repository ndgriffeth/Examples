<?php
include_once('A.class');

$a = new A();

$a->super_x = "newvalue";
print '$a->super_x is '.$a->super_x."<br />";

$a->value = "shouldbeundefined";
print '$a->value is '.$a->value."<br />";

if(property_exists('A','value')) {
	print "class A has property value<br />";
} else {
	print "class A does not have property value<br />";
}

if (empty($a->value)) {
	print 'variable $a->value is empty<br />';
} else {
	print 'variable $a->value is not empty<br />';
}

?>