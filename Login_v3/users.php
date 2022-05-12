<?php
session_start(); 
include("../DbConnection.php"); 

 if(isset($_POST["register"]))
{
   $userName = $_POST["username"];
   $email = $_POST["email"];
   $password = $_POST["password"]; 

   $userPropertie = [
    "email" => $email, 
    "emailVerified" => false,
    "username" => $userName,
    "password" => $password,  
    
];

$createUsers = $auth->createUser($userPropertie);

if($createUsers)
{
    header("Location: index.php"); 
}
else 
{

}
}


?>