<?php
class base{
    public $name; // public access modifier
    //protected $name; // protected access modifier
    //private $name; // private access modifier

    public function __construct($n){ 
        $this->name = $n;
    }
    public function show(){
        echo "Your name is: ".$this->name; // accessing public property
        
    }
}
class derived extends base{
    public function get_name(){
        echo "Your name is: ".$this->name; // accessing protected property
    }
}
//$test = new base("Syntax Sage"); // object created
// $test = new derived("Syntax Sage");
$test = new base("Syntax Sage");
//$test->name = "Sage Syntax"; // (i)overwriting property (ii)error if property is protected
$test->show(); // calling method
// $test->get_name(); // calling method
//For more information read the the readme file
?>