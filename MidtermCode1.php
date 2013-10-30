<?php
$DOC_ROOT = $_SERVER['DOCUMENT_ROOT'];

$file_name = "$DOC_ROOT/../cars.txt";
$file = fopen('$file_name', 'rb');   

line_counter = 0;   

while( !feof($file)){
	
	$line_counter = $line_counter + 1; 
	if ($line_counter == 27){
		$line = fgets($file);			
		$line_array = array('color', 'year', 'model');  
		list($line_array['color'], $line_array['year'], $line_array['model']) =  explode(' ',$line);
		echo $line_array['year'];
		break;   #optional
	}
	
}

fclose($file);
?>