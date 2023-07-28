<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "project";

try {
  $conn = new PDO("mysql:host=$servername", "$username", "$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $createdbsql = "CREATE DATABASE project";
  $conn->exec($createdbsql);
  
  $pdo = new PDO("mysql:host=$servername;dbname=$database", "$username", "$password");
  $createtable="CREATE TABLE user(`firstname` VARCHAR(50) NOT NULL, `lastname` VARCHAR(50) NOT NULL, `phone` VARCHAR(20) NOT NULL,`email` VARCHAR(250) NOT NULL,`payment` VARCHAR(50) NOT NULL,`password` VARCHAR(250) NOT NULL)";
  $pdo->exec($createtable);
  
  echo "<h1 style='color:green;text-align:center;'>Setup Completed Successfully</h1>";
} catch (Exception $e) {
  error_log($e->getMessage());
  echo "<h1 style='color:orange;text-align:center;'>Setup Already Done</h1>"; //something a user can understand
}

?>
