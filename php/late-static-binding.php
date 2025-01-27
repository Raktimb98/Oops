<?php
class personal{
	protected static $name = "Frost Fern";
	public function show(){
		echo static::$name;
	}

}
class accounts extends personal{
	protected static $name = "Byte Crafter";
}
$test = new accounts();
$test-> show();
?>
