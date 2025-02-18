<?php
class student
{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __call($method, $argument)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $argument);
        } else {
            echo "Method does not exist: $method";
        }
    }
    public function getFullName()
    {
        echo $this->first_name . ' ' . $this->last_name;
    }
}
$test = new student();
$test->setName('Frost', 'Fern');
$test->getFullName();
?>