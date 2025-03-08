<?php
// class myClass{
//     function name(){
//         echo "My name is ".get_class($this)."\n";
//     }
// }
// class xyz extends myClass{
//     function name(){
//         echo "My name is ".get_parent_class($this)."\n";
//     }

// }
// $obj = new myClass();
// $obj->name();
// echo"Class name is " .get_class($obj)."\n"; //we also can use get_class() function to get the class name of an object.
// $obj2 = new xyz();
// $obj2->name();

// echo"Parent Class name is " .get_parent_class($obj2)."\n";



// class myClass{
//     function __construct(){
        
//     }
//     function myFunction1(){

//     }
//     function myFunction2(){

//     }
// }
// $class_methods = get_class_methods('myClass');
// // print_r($class_methods);
// // echo "\n";
// //we also can do this
// foreach($class_methods as $method){
//     echo $method."\n";
// }


// class myClass{
//     public $var1;
//     public $var2 = 100;
//     public $var3 = "hii";
//     public $var4 = 10.5;
// }
// $obj = new myClass();
// $class_vars = get_class_vars(get_class($obj));
// foreach($class_vars as $name => $value){
//     echo "$name : $value\n";
// }



// class myClass{
//     public $var1;
//     public $var2 = 100;
//     public $var3 = "hii";
//     public $var4 = 10.5;
//     function __construct()
//     {
//         $this->var1 = 10;
//         $this->var1 = 20;
//         print_r(get_object_vars($this));
//     }
// }
// $obj = new myClass();
// $class_vars = get_object_vars($obj);
// foreach($class_vars as $name => $value){
//     echo "$name : $value\n";
// }



// class abc{
// static public function test(){
//     var_dump(get_called_class());
// }
// }
// class xyz extends abc{

// }
// abc::test();
// xyz::test();



// class abc{
//     static public function test(){

//     }
// }
// class xyz extends abc{

// }
// print_r(get_declared_classes());


// interface test{

// }
// class abc{
//     static public function test(){

//     }
// }
// class xyz extends abc{

// }
// print_r(get_declared_interfaces());




// trait test{

// }
// class abc{
//     use test;
// }
// class xyz extends abc{

// }
// print_r(get_declared_traits());



class myClass{
    public $test;
}
class_alias('myClass','MC');
$obj = new myClass();
$obj2 = new MC();
$obj->test = "hii";
$obj2->test = "hello";
echo $obj->test."\n";
echo $obj2->test."\n";
?>