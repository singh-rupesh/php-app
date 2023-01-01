<?php
session_start();

$_SESSION["_checkLogin"] = false;

header("refresh:1 url = login.php");