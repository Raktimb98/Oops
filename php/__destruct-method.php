<?php
class abc{
    public function __construct(){ //This function is called when the object is created
        echo "I am constructor\n";
    }
    public function hello(){
        echo "Hello\n";
    }
    public function __destruct(){ //This function is called when the object is destroyed
        echo "I am destructor\n";
    }
}
$test = new abc();
$test->hello();
?>