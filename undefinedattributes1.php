<?php
// Using the getter doesn't create an undefined attribute as a local variable, 
// but using the setter does.  Once it has been created, no more calls to the setter or
// getter
include_once('B.class');

$a = new A();
print '$a->undefined '.$a->undefined.'<br />';
$a->undefined = 20;
print '$a->undefined '.$a->undefined.'<br />';
$a->other = 20;
print '$a->other '.$a->other.'<br />';
$a->other = 20;
print '$a->other '.$a->other.'<br />';

$b = new B(1);
print '$b->undefined '.$b->undefined.'<br />';
$b->undefined = 20;
print '$b->undefined '.$b->undefined.'<br />';
$b->other = 20;
print '$b->other '.$b->other.'<br />';
$b->other = 20;
print '$b->other '.$b->other.'<br />';

print '$b->super_x '.$b->super_x.'<br />';
$b->super_x = 20;
print '$b->super_x '.$b->super_x.'<br />';
?>