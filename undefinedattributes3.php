<?php
include_once('B.class');

$b = new B("firstvalue");

print '$b is '.$b.'<br />';
print '$b->super_x is '.$b->super_x.'<br />';
print '$b->sub_x is '.$b->sub_x.'<br />';

$b->super_x = "newvalue";
$b->sub_x = "othernewvalue";

print '$b is '.$b.'<br />';
print '$b->super_x is '.$b->super_x.'<br />';
print '$b->sub_x is '.$b->sub_x.'<br />';
?>