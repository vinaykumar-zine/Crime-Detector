<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;

try {
  $conn = new PDO("mysql:host=$servername", "$username", "$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $createdbsql = "DROP DATABASE project";
  $conn->exec($createdbsql);
  
  echo "<h1 style='color:green;text-align:center;'>Setup Deleted Successfully</h1>";
} catch (Exception $e) {
  error_log($e->getMessage());
  echo "<h1 style='color:orange;text-align:center;'>Setup Not Exist</h1>"; //something a user can understand
}

?>
