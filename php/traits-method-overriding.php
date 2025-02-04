<?php
trait Hello{
    public function hello(){
        echo "Hello from tarit";
    }
}
class A{
    public function hello(){
        echo "Hello from A";
    }
}
class B extends A{
    use Hello;
}
$obj = new B();
$obj->hello();
?>