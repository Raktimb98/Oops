<?php
trait Hello{
    public function hello(){
        echo "Hello from Trait";
    }
}
class A{
    public function hello(){
        echo "Hello from A";
    }
}
class B extends A{
    use Hello;
    public function hello(){
        echo "Hello from B";
    }
}
$obj = new B(); // Priority is given to the B class method (Basically Priority matters)
$obj->hello();
?>