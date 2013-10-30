<?php
// Get input sent from form (user name and password)
$name=$_REQUEST['name'];   // could also be $_POST['name']
$password=$_REQUEST['password'];
print($name." ".$password."#<br />");
// Read through local file
$filename=$_SERVER['DOCUMENT_ROOT']."/../users/users.txt";
if (!$fp=@fopen($filename,"rb"))
{
	print("Please try again later<br />");
	exit;
}
while (!feof($fp))
{
	if (!$line = fgets($fp)) 
	{
		print("Please try again later<br .>");
		exit;
	}
	list($user, $pw) = explode(' ',$line);
	print($user." ".$pw."#<br />");
	if ($user==$name and $pw==$password)
	{
		include('welcome.html');
		exit;
	} 
}
include('error.html');
?>