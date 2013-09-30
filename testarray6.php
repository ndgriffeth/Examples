<?php
$array1 = array('a'=>1, 2=>'b', 'alpha'=>3);
$array2 = array('alpha'=>3, 'a'=>1, 2=>'b');
if ($array1 == $array2) {
    echo '$array1 == $array2';
} else {
    echo '$array1 !== $array2';
}

echo "<br />";

if ($array1 === $array2) {
    echo '$array1 === $array2';
} else {
    echo '$array1 !=== $array2';
}
