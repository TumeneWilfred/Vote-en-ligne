<?php
session_start(); 
include("DbConnection.php");


if(isset($_POST["creerElection"]))
{
    $nomElection = $_POST["nomElection"]; 
    $tempElection = $_POST["tempElection"]; 
     
    $postElection = [
        "nomElection" => $nomElection, 
        "tempElection" => $tempElection, 
    ];
  $refElection = "election"; 
  $postElec = $database->getReference($refElection)->push($postElection); 

  if($postElec)
 {
     header("location: configurationElection.php"); 
 }
}
else {

}


if(isset($_POST["creer"]))
{
    $liste = $_POST["liste"]; 
    $couleur = $_POST["couleur"]; 

    $postListe = [
        "liste" => $liste, 
        "couleur" => $couleur, 
    ];
  $refListe = "liste"; 
  $postList = $database->getReference($refListe)->push($postListe); 
  
  if($postList)
 {
     header("location: voirListes.php"); 
 }
}
else {

}
if(isset($_POST["creerElection"]))
{
    $nomElection = $_POST["nomElection"]; 
    $tempElection = $_POST["tempElection"]; 
     

    $postElection = [
        "nomElection" => $nomElection, 
        "tempElection" => $tempElection, 
    ];
  $refElection = "election"; 
  $postElec = $database->getReference($refElection)->push($postElection); 
}
else {

}

if(isset($_POST["enregistrer"]))
{

$taille  = 10;
$pass = array();
$id = 0;  
for($i=48; $i<58; $i++ ) $pass[$id++] = chr($i); 
for($i=65; $i<91; $i++ ) $pass[$id++] = chr($i); 
for($i=97; $i<123; $i++ ) $pass[$id++] = chr($i); 
$password = "";

for($i = 0 ; $i < $taille; $i++) 
{
    $password .= $pass[rand(0, $id - 1)];
}


    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"]; 
    $matricule = $_POST["matricule"];
    $role = $_POST["role"];
    
    $postData = [
     "nom" => $nom, 
     "prenom" => $prenom,
     "email" => $email, 
     "matricule" => $matricule,
     "role" => $role,
     "password" => sha1($password)
 ];
 $refTable = "utilisateurs"; 
 $postRef = $database->getReference($refTable)->push($postData);

 if($postRef)
 {
     $_SESSION["status"] = "votre enregistrement a été un succes!!!";
     header("location: add-teacher.php"); 

$header = "MINE-version: 1.0\r\n"; 
$header .= "From: 'alcantadard.com' <supportAlcantadard.com>"."\n";  
$header .= "Content-Type:text/html; charset = 'utf-8'"."\n"; 
$header .= "Content-Transfer-Encoding: 8bit";

$message = "<p>Bienvenue au election de l'AE Mme/Mr $nom </p>
            <p>Matricule: $matricule</p>
            <p>Password: $password.</p>
           

"
;

mail($email, "Objet", $message, $header); 

 }

}

if(isset($_POST["delete"]))
{
    $id = $_POST["id_key"];
    $refTable = "utilisateurs/".$id;
    $deleteData = $database->getReference($refTable)->remove();
}
if($deleteData)
{
    $_SESSION["status"] = "Suppression reussi!!!";
    header("Location: voirListes.php"); 
}

else 
{

}
if(isset($_POST["deleteListe"]))
{
    $id = $_POST["id_key2"];
    $voteListe = "liste/".$id;
    $deleteListe = $database->getReference($voteListe)->remove();
}
if($deleteListe)
{

    header("Location: voirListes.php"); 
}

else 
{

}

if(isset($_POST["modifier"]))
{
    $id = $_POST["id"];
    $nomE = $_POST["nom"];
    $prenomE = $_POST["prenom"];
    $matriculeE = $_POST["matricule"];
    $mailE = $_POST["email"];
    $roleE = $_POST["role"];

    $updateData = [
        "nom" => $nomE, 
        "prenom" => $prenomE, 
        "matricule" => $matriculeE, 
        "email" => $mailE,
        "role" => $roleE, 
    ];
 
   $modifTable = "utilisateurs/".$id;
   $updateQuery =  $database->getReference($modifTable)->update($updateData);
}

if($updateQuery)
{
    header("location: all-teacher.php"); 
}
else 
{
    
}
if(isset($_POST["modifListe"]))
{
    $id = $_POST["id"];
    $listeE = $_POST["liste"];
    $couleurE = $_POST["couleur"];

    $updateListe = [
        "liste" => $listeE, 
        "couleur" => $couleurE
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