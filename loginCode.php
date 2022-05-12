<?php
session_start();
include("DbConnection.php"); 
if(isset($_POST["login"])); 
{
    $email = $_POST["email"]; 
    $password = $_POST["password"]; 
  

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
            $_SESSION["status"] = "login Reuissi!!";
            header("Location: index2.html"); 
            exit();
        } catch(InvalideToken $e)
        {
            echo " the token is invalid".$e->getMessage();
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

?>