<?php

   $host = "localhost";
   $db = "school";
   $user = "root";
   $pass = "";
   $charset = "utf8mb4";

   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

   try{
    $connection = new PDO($dsn, $user, $pass);
   } catch(PDOException $e) {
      throw new PDOException($e->getMessage());
   }

?>