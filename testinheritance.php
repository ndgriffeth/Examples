<?php
class A
{
function __construct()
{
	print "***This is the constructor for class A***<br />";
	$this->super_x = 1;
}

function __set($name, $value)
{
	print "***This is the setter for class A: set $name to $value ***<br />";
	$this->$name = $value;
}

function __get($name)
{
	print "***This is the getter for class A: return the value of $name ***<br />";
	return $this->$name;
}

function __toString() 
{
	print "***This is the toString method for A***<br />";
	$x = $this->super_x;
	settype($x, 'string');
    return $x;
}

private $super_x;
}

class B extends A
{
function __construct($val)
{
     print "***This is the constructor for class B***<br />";
	$this->sub_x = $val;
	#parent::__construct();
}

function notconstruct()
{
	print "***This is a regular function for B***<br />";
	parent::__construct();   // works as expected
}

function __set($name, $value) 
{
	print "***This is the setter for class B: set $name to $value ***<br />";
	#parent::__set($name,$value);
	$this->$name = $value;
}

function __get($name)
{
	print "***This is the getter for class B: return the value of ".$name." ***<br />";
	return $this->$name;
}

function __toString()
{
	print "*** This is the toString method for B***<br />";
	$x = parent::__toString()." ".$this->sub_x;
    return $x;
}

private $sub_x;
}

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