<?php  
$myarray = array("a"=>7, "b"=> 3, "c" => 8, "d" => 6);
echo 'Before asort, $myarray = (';
foreach ($myarray as $key=>$entry) {
    echo $key." => ".$entry." ";
};
echo ")<br />";

asort($myarray);
echo 'After asort, $myarray = (';
foreach ($myarray as $key=>$entry)    {
    echo $key." => ".$entry." ";
};
echo ")<br />";
?>
