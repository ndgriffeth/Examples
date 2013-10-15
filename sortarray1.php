<?php  
$myarray = array(7,3,8,6);
echo 'Before sort, $myarray = (';
foreach ($myarray as $key=>$entry) {
    echo $key." => ".$entry." ";
};
echo ")<br />";

sort($myarray);
echo 'After sort, $myarray = (';
foreach ($myarray as $key=>$entry)    {
    echo $key." => ".$entry." ";
};
echo ")<br />";
?>
