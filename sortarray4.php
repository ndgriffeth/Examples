<?php  
$myarray = array("b"=>3, "a"=>7, "d"=>6,  "c"=>8);
echo 'Before ksort, $myarray = (';
foreach ($myarray as $key=>$entry) {
    echo $key." => ".$entry." ";
};
echo ")<br />";

ksort($myarray);
echo 'After ksort, $myarray = (';
foreach ($myarray as $key=>$entry)    {
    echo $key." => ".$entry." ";
};
echo ")<br />";
?>
