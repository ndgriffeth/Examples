<?php
$array1 = array('a'=>'alpha', 'b'=>'beta', 'c'=>'gamma');
$array2 = array('c'=>3, 'd'=>4, 'e'=>5);
$array3 = $array1+$array2;
foreach ($array3 as $key=>$value) {
    echo '$array3['.$key.'] = '.$array3[$key].'<br />';
}
?>