<?php
abstract class parentClass
{ //!Abstract class (can't be used to create objects)
    public $name;
    abstract protected function calc($a, $b);
}
class childClass extends parentClass
{
    public function calc($x, $y)
    {
        echo $x + $y;
    }
}
$test = new childClass();
$test->calc(10, 20);
?>