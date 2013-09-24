<h1>Nancy's Super Web Site</h1>

<?php
define('ELITEPRICE',500);
define('REGULARPRICE',300);
define('BUDGETPRICE',100);
$yourname = $_POST['name'];
$password=$_POST['password'];
$roomtype=$_POST['roomtype'];
$seats=$_POST['seats'];
date_default_timezone_set("America/New_York");
?>
<p>Order processed at 
<?php echo " ".date('H:i, jS F Y'); ?>
</p><p>You are 
<?php echo $yourname; ?>
</p><p>Your password is 
<?php echo $password; ?>
</p><p>Your room type is
<?php echo $roomtype; ?>
</p><p>The number of seats is
<?php 
echo $seats; 
?>
<p>
<?php
if ($roomtype == "elite") {
$totalcost = ELITEPRICE*$seats; }
elseif ($roomtype == "regular") {
$totalcost = REGULARPRICE*$seats; }
elseif ($roomtype == "budget") {
$totalcost = BUDGETPRICE*$seats; }
else { echo "Invalid room type"; exit; }
echo "Total cost is ".$totalcost;
?>
</p>
