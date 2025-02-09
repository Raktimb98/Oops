<!-- Type-Hinting and Type Declaration are the same thing -->
<?php
// function sum(int $a, int $b) { // Type-Hinting
//     echo $a + $b + 1;
// }
// sum(55, 45);

// class hello{
//     public function sayhello(){
//         echo "Hello";
//     }
// }
// class bye{
//     public function saybye(){
//         echo "Bye";
//     }
// }
// function wow(hello $c){ //Type Hinting
//     $c->sayhello();
// }
// $test = new hello();
// wow($test);

class school{
    public function getNames(student $names){ //Type Hinting
        echo "<ul>";
        foreach($names->Names() as $name){
            echo "<li>". $name . "</li>";
        }
        echo "</ul>";
    }
}
class student{
    public function Names(){
        return ['John', 'Doe', 'Smith'];
    }
}
class library{

}
$lib = new library();
$stu = new student();
$sch = new school();
$sch->getNames($stu);
?>