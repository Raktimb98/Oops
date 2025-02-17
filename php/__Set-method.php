<?php
class student
{
    private $name;
    public function hello()
    {
        echo $this->name;
    }
    public function __get($property)
    {
        echo "You are trying to access non-existing or private property ($property)";
    }
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "You are trying to set non-existing or private property ($property)";
        }
    }
}
$student = new student();
$student->name = "John Doe";
$student->hello();
?>