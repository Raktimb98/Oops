<?php

use products\product;

require 'products.php';
require 'testing.php';
function wow(){
    echo "Wow form Index<br>";
}
$obj = new testing\product();
products\wow();
?>