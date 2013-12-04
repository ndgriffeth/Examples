<?php
$params=session_get_cookie_params();
foreach($params as $key=>$value) {
	echo $key."=>".$value.'<br />';
}
?>