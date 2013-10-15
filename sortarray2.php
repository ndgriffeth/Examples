<?php  
$myarray = array("a"=>7, "b"=> 3, "c" => 8, "d" => 6);
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
