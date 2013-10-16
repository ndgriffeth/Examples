<?php
include_once('B.class');

$a = new A();
$b = new B(1);

$b->sub_x = 20;
$b->super_x = 10;

print 'b is '.$b.'<br />';

print '$b->sub_x is '.$b->sub_x.'<br />';
print '$b->super_x is '.$b->super_x.'<br />';

?>