<?php
class Student {
    public $name;
    public $course;

    public function __construct($name, $course) {
        $this->name = $name;
        $this->course = $course;
    }
}
$student1 = new Student("John", "PHP");
$student2 = clone $student1;
echo $student1->name;
echo "\n";
echo $student2->name;
?>
