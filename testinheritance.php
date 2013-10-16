<?php

include_once('A.class');
include_once('B.class');



$a = new A();
print '$a->super_x is '.$a->super_x.'<br />';
print "a is ".$a."<br />";
$a->super_x = "new";
$a->value = "random";			// calls the setter but does not cause error; 
					// apparently creates local variable when setter fails
print '$a->super_x is '.$a->super_x.'<br />';
print '$a->value is '.$a->value.'<br />'; // does not call getter
print "a is ".$a."<br />";

$b = new B("2");
print '$b->sub_x is '.$b->sub_x.'<br />';
print '$b->super_x is '.$b->super_x.'<br />';  // super_x is undefined in B
print "b is ".$b."<br />";
$b->sub_x = 10;
$b->super_x = 20;   // SETS A LOCAL VARIABLE IF SUPERCLASS SETTER NOT DEFINED!!!
print '$b->sub_x is '.$b->sub_x.'<br />';
print '$b->super_x is '.$b->super_x.'<br />';
print "b is ".$b."<br />";

$b->notconstruct();
print "b is ".$b."<br />";

print '$b->sub_x returns '.$b->sub_x.'<br />';
print '$b->super_x returns '.$b->super_x.'<br />';

?>