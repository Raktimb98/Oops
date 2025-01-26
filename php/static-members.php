<?php
class base{
    public static $name = "Frost Fern";
    public static function show(){
        echo self::$name;
    }
    public function __construct(){
        self::$name;
    }
}
$test = new base();
$test->show();
// echo base::$name;
// base::show();
?>


<?php
class second{
    public static $name = "Frost Fern";
}
    class derived extends second{

        public static function show(){
            echo parent::$name;
        }
    }
$test = new derived();
$test->show();
// echo base::$name;
// base::show();
?>