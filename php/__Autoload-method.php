<?php
// require 'Classes/first.php';
// require 'Classes/second.php';
spl_autoload_register(function ($class) {
    require 'Classes/' . $class . '.php';
});
$test = new second();
$test = new first();
?>