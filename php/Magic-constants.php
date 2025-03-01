<?php
namespace test;
trait example{
    public function example(){
        return __TRAIT__;
    }
    public function test(){
        echo "Function name is: " . __FUNCTION__ . "<br>";
    }
}
class test{
    public function __construct(){
        echo "Class name is: " . __CLASS__ . "<br>";
        echo "Method name is: " . __METHOD__ . "<br>";
    }
    public function test(){
        echo "Function name is: " . __FUNCTION__ . "<br>";
    }
    use example;
}
$obj = new test();
$obj->test();
echo "Line number is: " . __LINE__ . "<br>";
echo "File path is: " . __FILE__ . "<br>";
echo "Directory path is: " . __DIR__ . "<br>";
echo "Namespace name is: " . __NAMESPACE__ . "<br>";
echo "Trait name is: " . $obj->example() . "<br>";
?>