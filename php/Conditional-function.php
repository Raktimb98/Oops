<?php 
// interface MyInterfaces{

// }
// class myClass{

// }
// if(interface_exists('MyInterface')){
    // echo "Interface is exist";
//     $obj = new MyInterfaces();
// }else{
//     echo "Interface is not exist";
// }
// if(class_exists('myClass')){
    // echo "Class is exist";
//     $obj = new myClass();
// }else{
//     echo "Class is not exist";
// }


// class myClass{
//     public function myFunction(){
//         echo "This is my function";
//     }
// }
// $obj = new myClass();
// if(method_exists($obj, 'myFunction')){
//     $obj->myFunction();
// }else{
//     echo "Method is not exist";
// }


// trait MyTrait {
//     public function myMethod() {
//         echo "This is my method";
//     }
// }
// class myClass {
//     use MyTrait;
// }
// $obj = new myClass();
// if (trait_exists('MyTrait')) {
//     $obj->myMethod();
// } else {
//     echo "Method does not exist";
// }

// class MyClass{
//     public $test;
// }
// $obj = new MyClass();
// if (property_exists($obj, 'test')) {
//     echo "Property is exist";
// } else {
//     echo "Property is not exist";
// }

// class MyClass{

// }
// $obj = new MyClass();
// if(is_a($obj, 'MyClass')){
//     echo "Object is an instance of MyClass";
// }else{
//     echo "Object is not an instance of MyClass";
// }

class ParentClass{

}
class ChildClass extends ParentClass{

}
$obj = new ChildClass();
if(is_subclass_of($obj, 'ParentClass')){
    echo "ChildClass is a subclass of ParentClass";
}else{
    echo "ChildClass is not a subclass of ParentClass";
}
?>