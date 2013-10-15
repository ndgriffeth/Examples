<?php
   $var = 1;
   test();
   function test()
   {
     global $var;
     echo $var;
   }
?>