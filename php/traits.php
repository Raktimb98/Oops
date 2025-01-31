<?php
trait hello {
    public function sayHello() {
        echo 'Hello ';
    }
}
trait bye{
    public function sayBye() {
        echo 'Bye';
    }
}
class Base {
    use hello, bye;
}
$obj = new Base();
$obj->sayHello();
$obj = new Base();
$obj->sayBye();
?>