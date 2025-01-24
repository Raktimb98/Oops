<?php
interface parent1{
    function calc($a,$b); //Default access specifier is public
}
interface parent2{
    function sub($c,$d);
}
class child implements parent1,parent2{
    public function calc($a,$b){
        echo "Summation is: ".($a+$b)."\n";
    }
    public function sub($c,$d){
        echo "Subtraction is: ".($c-$d)."\n";
    }
}
$obj = new child();
$obj->calc(10,20);
$obj->sub(20,10);
?>