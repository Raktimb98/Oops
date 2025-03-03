<?php
interface MyInterfaces{

}
class myClass{

}
if(interface_exists('MyInterface')){
    // echo "Interface is exist";
    $obj = new MyInterfaces();
}else{
    echo "Interface is not exist";
}
if(class_exists('myClass')){
    // echo "Class is exist";
    $obj = new myClass();
}else{
    echo "Class is not exist";
}
?>