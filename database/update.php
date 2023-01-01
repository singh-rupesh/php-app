<?php

$student_id = $_GET["student_id"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$dob = $_GET["dob"];
$email = $_GET["email"];
$mobile_no = $_GET["mobile_no"];
$country = $_GET["country"];

require_once("db/connection.php");

$sth = $connection->prepare("UPDATE `students` SET first_name = '{$first_name}', last_name = '{$last_name}', dob = '{$dob}', email = '{$email}', mobile_no = '{$mobile_no}', country = '{$country}' WHERE id = '{$student_id}'");

$sth->execute();

echo $sth->rowCount() . " Profile Updated";

?>