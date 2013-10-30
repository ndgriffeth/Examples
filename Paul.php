<?php

$test = "The monkey is free from its cage.";

if(strlen($test) > 14){

echo substr($test, 10);

}

else{

echo 'Your sentence is not long enough. Good-bye.';

}
?>