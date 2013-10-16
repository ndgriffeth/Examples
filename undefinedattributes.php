<?php
include_once('B.class');

$a = new A();
$b = new B("originalvalue");
#print '$a->super_x is '.$a->super_x."<br />";
print '$b->sub_x is '.$b->sub_x."<br />";

$a->super_x = "newvalue";
$b->sub_x = "othernewvalue";
#print '$a->super_x is '.$a->super_x."<br />";
print '$b->sub_x is '.$b->sub_x."<br />";

$a->value = "shouldbeundefined";
$b->value = "shouldbeundefined";
print '$a->value is '.$a->value."<br />";
print '$b->value is '.$b->value."<br />";

if(property_exists('A','value')) {
	print "class A has property value<br />";
} else {
	print "class A does not have property value<br />";
}

if (empty($a->value)) {
	print 'property $a->value is empty<br />';
} else {
	print 'property $a->value is not empty<br />';
}

print "<h3>However</h3>";

print '$b->super_x is '.$b->super_x."<br />";
$b->super_x = 10;
print '$b->super_x is '.$b->super_x."<br />";
?>