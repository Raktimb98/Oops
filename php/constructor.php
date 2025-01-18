<?php
class person{
    public $name , $age; //properties

    function __construct($name = "Not set",$age = 0){ //method
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
        echo "Name: ".$this->name. " Age: ".$this->age."\n";
    }
}
$p1 = new person('FrostFern' , 16); //define object or value assign
$p2 = new person('DebugDragon' , 19);
$p3 = new person('NeonDebugger' , 69);
$p4 = new person('GlitchArchitect' , 176);
$p5 = new person('ByteCrafter' , 1);
$p6 = new person('SyntaxSage' , 78);
$p7 = new person('TerminalNinja' , 708);
$p8 = new person(); //default value

$p1->show();
$p2->show();
$p3->show();
$p4->show();
$p5->show();
$p6->show();
$p7->show();
$p8->show();

?>