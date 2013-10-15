<?php
class TestPublic
{

private  $var1="var1";
private  $var2;

public function __construct()
{
	$this->var2 = "var2";
	echo "__get is commented out<br />";
}

#public function __get($name)
#{
#	echo "The getter intervenes!!<br />";
#	return $this->$name;
#}

public function getVar1()
{
	return $this->var1;
}

public function getVar2()
{
	return $this->var2;
}

}
?>