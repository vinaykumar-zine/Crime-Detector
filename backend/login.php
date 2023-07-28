<?php
//login
/*ini_set('display_errors',1); 
error_reporting(E_ALL);*/
session_start();
require 'connection.php';

$email=$_POST['email']; 
$password = md5($_POST['password']);

$check = $pdo->prepare("SELECT firstname, lastname,email, password FROM user WHERE email=? AND password=?");
$check->execute([$email,$password]); 
$user = $check->fetch();

 if ($user['email']==$email && $user['password']==$password) {
   $_SESSION['firstname'] = $user['firstname'];
   $_SESSION['lastname'] = $user['lastname'];
   $_SESSION['email'] = $user['email'];
   
    header("Location: /group no.18_lifestyle store/products.php");
  }else{
    header("Location: /");  }
  
  ?>