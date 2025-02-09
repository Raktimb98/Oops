<!-- Type-Hinting and Type Declaration are the same thing -->
<?php
function sum(int $a, int $b) { // Type-Hinting
    echo $a + $b + 1;
}
sum(55, 45);
?>