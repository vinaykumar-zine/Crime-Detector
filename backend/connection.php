<?php
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "project";

$options = [
  PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", "$username", "$password", $options);
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something Went Wrong 🥴'); //something a user can understand
}
?>
