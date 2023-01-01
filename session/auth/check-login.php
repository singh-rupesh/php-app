<?php
session_start();

if(!@$_SESSION["_checkLogin"]){
    echo '<center style="color: red;">You must login first</center>';
    header("refresh:3 url = login.php");
}else{
    echo 'Successfully LoggedIn';
    
    echo '<br>';

    echo '<a href="logout.php">Logout</a>';
}