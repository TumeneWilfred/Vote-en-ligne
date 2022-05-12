<?php
session_start(); 
include("DbConnection.php"); 

if(isset($_POST["modifListe"]))
{
    $id = $_POST["id"];
    $listeE = $_POST["liste"];

    $updateListe = [
        "liste" => $listeE, 
    ];
 
   $modifTable = "liste/".$id;
   $updateList =  $database->getReference($modifTable)->update($updateListe);
}

if($updateList)
{
    header("location: voirListes.php"); 
}
else 
{
   
}

?>