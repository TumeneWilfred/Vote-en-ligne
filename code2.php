<?php
session_start(); 
include("DbConnection.php"); 

if(isset($_POST["creerPoste"]))
{
    $nomElection = $_POST["nomPoste"]; 
   
    $postcreer = [
        "nomPoste" => $nomElection, 
    ];
  $refPoste = "poste"; 
  $creerPoste = $database->getReference($refPoste)->push($postcreer); 

  if($creerPoste)
 {
    header("location: poste.php"); 
    $_SESSION["status"] != "login Reuissi"; 
 }
}

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
     $_SESSION["status"] != "login Reuissi"; 
}
else 
{
   
}


if(isset($_POST["deletePoste"]))
{
    $id = $_POST["id_key3"];
    $votePoste = "poste/".$id; 
    $deletePoste = $database->getReference($votePoste)->remove();
}
if($deletePoste)
{

    header("Location: listePoste.php"); 
    $_SESSION["status"] = "login Reuissi";
    
}

if(isset($_POST["modifPoste"])) 
{
    $id = $_POST["id"]; 
    $poste = $_POST["nomPoste"]; 

    $updatePoste = [
        "nomPoste" => $poste
    ];
    $Table = "poste/".$id;
    $updateThisPoste =  $database->getReference($Table)->update($updatePoste);
}
if($updateThisPoste)
{
    header("location: listePoste.php"); 
    $_SESSION["status"] != "login Reuissi"; 
}
?>