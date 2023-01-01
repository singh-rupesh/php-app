<?php

function sum($a, $b){
    echo $a + $b;
}

sum(10, 101);

/*

-
+
*
/

*/

echo "<hr>";


// Se. 2

function plus($x, $y){
    
    $total = $x + $y;
    return $total;
}


$xx = plus(100, 100);

$gst = $xx*18/100;

echo $gst;


?>