<?php
class student{
    public $course = "PHP";
    private $first_name;
    private $last_name;
    private $conn;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __construct()
    {
        $this->conn = mysqli_connect();
    }
    public function __sleep()
    {
        mysqli_close($this->conn);
        return array('first_name', 'last_name');
    }
    public function __wakeup()
    {
        echo "Wake up method is called<br>";
    }
}
$obj = new student();
$obj->setName("Frost", "Fern");
$srl = serialize($obj);
$us = unserialize($srl);
print_r($us);
?>