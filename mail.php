<?php
$to = "nancy@griffeth.name";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "nancy.griffeth@lehman.cuny.edu";
$headers = "From:" . $from;
$result = mail($to,$subject,$message,$headers);
var_dump($result);
echo "<br />";
echo "Mail Sent.";
?>
