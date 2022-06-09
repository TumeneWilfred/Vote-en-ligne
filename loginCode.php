<?php
session_start();
include("DbConnection.php"); 
$email = $_POST["email"]; 
$password = $_POST["password"]; 
if(!empty($email) AND !empty($password))
{

if(isset($_POST["login"])); 
{
  
    try {
        $user = $auth->getUserByEmail("$email"); 
        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        $idTokenString = $signInResult->idToken();

        try 
        {
            $verifiedToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedToken->claims()->get("sub");
            $_SESSION["verified_user_id"] = $uid; 
            $_SESSION["idTokenString"] = $idTokenString;
            $_SESSION["status"] = "login Reuissi";
            header("Location: index2.php"); 
           
        } catch(InvalideToken $e)
        {
            echo " the token is invalid".$e->getMessage();
            header("Location: logout.php"); 
        }
        catch (\InvalidArgumentException $e){
            echo "the token could not be parsed".$e->getMessage;
        }
    } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) 
    {
        $_SESSION["status"] = "No email Found";
        header("Location: index.php"); 
        
        exit();
    }
}
}
else 
{
    header("location: index.php"); 
}

?>