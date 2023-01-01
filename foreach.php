<?php

$color = array("Blue", "Black", "Green", "Pink");

foreach ($color as $clr) {
    echo $clr ;
    echo "<br>";
}


echo "<hr>";



$empData = array("Nitesh"=>"EMP1234", "Umesh"=>"EMP1235", "Vimal"=>"EMP1236");

foreach ($empData as $emp =>$val) {
    echo $emp . " => " . $val;
    echo "<br>";
}
