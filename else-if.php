<?php

$name = "Satyam";

if (strlen($name) <= 0){
    echo '<span style="color:red">Please fill the name</span>';
}else if(is_numeric($name)){
    echo '<span style="color:red">Please use character to fill name</span>';
}else{
    echo '<span style="color:brown">'.$name.'</span>';
}