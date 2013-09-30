<?php
$fp = fopen("/Users/nancyg/Data/junk","rb");
echo "<pre>";
fpassthru($fp);
echo "</pre>";
?>
