<?php
//signup
session_start();
require 'connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = md5($_POST['password']);


 // email, gamername availability check query 
 $check = $pdo->prepare("SELECT email FROM user WHERE email=? LIMIT 1");
 $check->execute([$email]); 
 
 if ($check->rowCount()>0) {
    header("location: /");
  }elseif($check->rowCount()==0){
    //registering user 
   $regUser=$pdo->prepare("INSERT INTO user(firstname, lastname, phone, email, password) VALUES(?,?,?,?,?)");
   
   $register = $regUser->execute([$firstname, $lastname, $phone, $email,$password]);
  
   $_SESSION['firstname'] = $firstname;
   $_SESSION['lastname'] = $lastname;
   $_SESSION['email'] = $email;
   
   header("location: /group no.18_lifestyle store/products.php");

                          }     
 

?>