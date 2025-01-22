<?php
class calculation
{
    public $a, $b, $c; //properties

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new calculation(); //object
$c1->a = 10;
$c1->b = 20;
$c2 = new calculation();
$c2->a = 30;
$c2->b = 20;

echo "Summation: " . $c1->sum() . "\n";
echo "Subtraction: " . $c2->sub(). "\n";
echo "Subtraction: " . $c1->sub();

?>