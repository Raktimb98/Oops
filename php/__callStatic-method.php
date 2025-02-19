<?php
class abc{
    private static function sayHello(){
        echo "Hello";
    }
    public static function __callStatic($method, $args){
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method], $args);
        }else{
            echo "Method does not exist: $method";
        }
}
}
abc::sayHello();
?>