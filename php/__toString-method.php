<?php
class abc{
    public function __toString()
    {
        return "This is object of class : ".get_class($this);
    }
}
$obj = new abc();
echo $obj;
?>