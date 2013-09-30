<?php
$array1 = range(1,10);
$array2 = range('a','z');

$array3 = $array1 + $array2;
for ($i=0; $i<count($array3); $i++) {
    echo '$array3['.$i.'] = '.$array3[$i].'<br />';
}
?>