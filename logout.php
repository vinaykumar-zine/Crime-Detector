<?php
session_start();
unset($_SESSION["firstname"]);
unset($_SESSION["lastname"]);
unset($_SESSION["email"]);
session_destroy();
header("Location:/");
?>
