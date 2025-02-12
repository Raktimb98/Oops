<?php
class abc{
    public function first(){
        echo "First function \n";
        return $this;
    }
    public function second(){
        echo "Second function \n";
        return $this;
    }
    public function third(){
        echo "Third function \n";
        return $this;
    }
}
$obj = new abc();
$obj->first()->second()->third();
?>