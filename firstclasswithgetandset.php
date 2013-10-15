<?php
class A
     {
        private $data1='data1';   // you can use initializers with data members
        public $data2='data2';
        
        function __get($name)
        {
            echo "get $name<br />";
            return $this->$name;
        }
        
        function __set($name,$value)
        {
        	echo "set $name to $value<br />";
        	$this->$name = $value;
        }
     }

     $a = new A();                // create a new instance of the class

	echo "set \$a->data1<br />";     
     $a->data1 = "newvalue";
	echo "set \$a->data2<br />";  
     $a->data2 = "othervalue";

	echo "print \$a->data2<br />";     
     print $a->data2;
     print "<br />";
	echo "print \$a->data1<br />";  
     print $a->data1;
?>