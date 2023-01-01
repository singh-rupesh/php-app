<?php

// Indexed Array
$car = array("BMW", "Ferrari", "Audi", "Kia");
echo "I like the car " . $car[2];

echo "<hr>";

$arrLen = count($car);
// Loop using Array
for ($i=0; $i < $arrLen; $i++) { 
    echo $car[$i];
    echo "<br>";
}


/*
$a = "RUPESH";
$b = "SINGH";
echo $a . " " . $b;
*/

echo "<hr>";

// 
$empData = array("Nitesh"=>"EMP1234", "Umesh"=>"EMP1235", "Vimal"=>"EMP1236");

echo($empData["Nitesh"]);


?>