<?php
class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "***** Employee Information ***** \n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: " . $this->salary . "\n";
    }
}
class manager extends employee
{
    public $ta = 1000; // TA = Travel Allowance
    public $phone = 300; // Phone Bill
    public $total_Salary = 0; //Insensitive + Salary
    function info()
    {
        $this->total_Salary = $this->salary + $this->ta + $this->phone;
        echo "***** Manager Information ***** \n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: " . $this->total_Salary. "\n";
    }
}

$e1 = new manager("Byte Crafter", 23, 10000);
$e2 = new employee("Debug Dragon", 32, 5000);
$e1->info();
$e2->info();

?>