<?php
class abc{
    public $course = "PHP";
    private $first_name;
    private $last_name;
    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep()
    {
        return array('first_name','last_name');
    }
}
$obj = new abc();
$obj->setName("Scar","Face");
$ser = serialize($obj);
echo $ser;
?>