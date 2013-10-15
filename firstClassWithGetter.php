<?php
class A
     {
        private $data1='data1';   // you can use initializers with data members
        public $data2='data2';
        
        function __get($name)
        {
            echo "get $name";
            return $this->$name;
        }
     }

     $a = new A();                // create a new instance of the class
     print $a->data2;
     print "<br />";
     print $a->data1;
?>