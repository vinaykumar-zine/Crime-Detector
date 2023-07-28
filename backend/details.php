<?php
//login
/*ini_set('display_errors',1); 
error_reporting(E_ALL);*/
session_start();
require 'connection.php';
require 'login.php';

 if ($user['email']==$email && $user['password']==$password) {
   $_SESSION['firstname'] = $user['firstname'];
   $_SESSION['lastname'] = $user['lastname'];
   $_SESSION['email'] = $user['email'];
   
    header("Location: /group no.18_lifestyle store/details.php");
  }else{
    header("Location: /group no.18_lifestyle store/login.php");  }
  
  ?>