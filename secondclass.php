<?php
     class A
     {
        function __construct($p1, $p2, $p3="abc") 
        {
            $this->var1 = $p1;
            $this->var2 = $p2;
            $this->var3 = $p3;
        }

        function __toString()
        {
            return "var1=$this->var1, var2=$this->var2, var3=$this->var3";
        }

        private $var1;
        private $var2;
        private $var3;
     }
     
     $a = new A("a", "b");
     echo "Just created an object(".$a.")<br />";
     $a2 = new A("alpha", "beta", "gamma");
     echo "Just created an object(".$a2.")<br />";
    
?>