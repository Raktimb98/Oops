<?php
class abc{
    private $name = "Frost Fern";
    public function hello(){
        echo "Hello, ".$this->name;
    }
    public function __get($property)
    {
        echo "You are trying to access non-existing or private property ($property)";
    }
}
$obj = new abc();
echo $obj->name;
?>