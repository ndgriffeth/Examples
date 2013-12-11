<?php
session_start();
echo 'SID '.SID.'<br />';
echo 'session_id() '.session_id().'<br />';
var_dump($_SESSION);
echo '<br />';
$params = session_get_cookie_params();
echo 'session_get_cookie_params()'.'<br />';
foreach ($params as $key=>$value) {
   echo $key." => ".$value.'<br />';
}
echo 'session_cache_expire() '.session_cache_expire().'<br />';
echo 'session_cache_limiter() '.session_cache_limiter().'<br />';
echo 'session_encode()';
$data = session_encode();
var_dump($data);
echo '<br />';
echo 'session_decode($data) '.session_decode($data).'<br />';
var_dump($_SESSION);
echo '<br />';
?>