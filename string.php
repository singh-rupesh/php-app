<?php

$p1 = "This is a ";
$p2 = "Cat";

// 
echo ($p1.$p2);

echo "<hr>";
// Upper Case
echo strtoupper($p1);

echo "<hr>";
// Lower Case
echo strtolower($p1);

echo "<hr>";
// Length of String
echo (strlen($p2));

echo "<hr>";
//Count Words in a String
echo (str_word_count($p1.$p2));

echo "<hr>";
// Reverse a String
echo(strrev($p2));

echo "<hr>";
// Search For a Text Within a String
// strchar();
echo (strpos($p1, "a"));

echo "<hr>";
// Replace Text Within a String
echo str_replace("This", "That", $p1.$p2);

echo "<hr>";
// Break a string into an array
$str = "This is a new session";
print_r (explode(" ",$str));

// ucfirst()
// ucwords()