<?php
session_start(); 

unset($_SESSION["verified_user_id"]); 
unset( $_SESSION["idTokenString"]); 

$_SESSION["status"] = "logout Reuissi";
header("location: index.php"); 

exit();

?>