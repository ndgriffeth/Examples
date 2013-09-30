<?php
$array = array(1, array(1,2,3), array('a'=>1,  3=>3));

foreach ($array as $key=>$value) {
   echo $key." => ";
   if (!is_array($array[$key])) {
       echo $value;
   } elseif (is_array($array[$key])) {
      echo "(";
      foreach($array[$key] as $k1=>$v1) {
         echo $k1." => ".$v1.", ";
      }
      echo ")";
   }
   echo "<br />";
}
?>
