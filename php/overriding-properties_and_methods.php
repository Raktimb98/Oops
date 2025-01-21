<?php
class base{
    public $name = "Parent"; 
    public function calculation( $a, $b ){
        return ($a + $b);
    }
}
class derived extends base{
    public $name = "Child";
    public function calculation( $a, $b ){ 
        return ($a - $b); // overriding the calculation method
    }
}
$obj1 = new derived(); 
echo $obj1->name ."\n";
echo $obj1->calculation(10, 5);
?>