<?php
session_start(); 
include("DbConnection.php");

if(isset($_POST["enregistrer"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"]; 
    $filiere = $_POST["filiere"];
    $matricule = $_POST["matricule"];
    $phone = $_POST["phone"];
    $niveau = $_POST["niveau"];
    $departement = $_POST["departement"];
    
    $postData = [
     "nom" => $nom, 
     "prenom" => $prenom,
     "email" => $email, 
     "filiere" => $filiere, 
     "matricule" => $matricule,
     "phone" => $phone,
     "niveau" => $niveau,
     "departement" => $departement,

 ];
 $refTable = "candidats"; 
 $postRef = $database->getReference($refTable)->push($postData);

 if($postRef) 
 {
     $_SESSION["status"] = "votre enregistrement a été un succes!!!";
     header("location: admit-form.php"); 
 }
 else 
 {
     $_SESSION["status"] = "Donnée nom enregistreés!!!!";
 }
}


if(isset($_POST["enregistrement"]))
{
    $nom2 = $_POST["nom2"];
    $prenom2 = $_POST["prenom2"];
    $email2 = $_POST["email2"]; 
    $filiere2 = $_POST["filiere2"];
    $matricule2 = $_POST["matricule2"];
    $phone2 = $_POST["phone2"];
    $niveau2 = $_POST["niveau2"];
    $departement2 = $_POST["departement2"];
    
    $postData2 = [
     "nom2" => $nom2, 
     "prenom2" => $prenom2,
     "email2" => $email2, 
     "filiere2" => $filiere2, 
     "matricule2" => $matricule2,
     "phone2" => $phone2,
     "niveau2" => $niveau2,
     "departement2" => $departement2,

 ];
 $tableElecteur = "eleteurs"; 
 $postElecteur = $database->getReference($tableElecteur)->push($postData2);

 if($postElecteur) 
 {
     $_SESSION["status"] = "votre enregistrement a été un succes!!!";
     header("location: add-teacher.php"); 
 }
 else 
 {
     $_SESSION["status"] = "Donnée nom enregistreés!!!!";
 }
}



if(isset($_POST["delete"]))
{
    $id = $_POST["id_key"];
    $refTable = "candidats/".$id;
    $deleteData = $database->getReference($refTable)->remove();
}
if($deleteData)
{
    $_SESSION["status"] = "Suppression reussi!!!";
    header("Location: all-student.php"); 
}
else 
{
    $_SESSION["status"] = "l'élement n'a pas été supprimer!";
    header("location: all-student.php"); 
}


if(isset($_POST["update"]))
{
    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"]; 
    $filiere = $_POST["filiere"];
    $matricule = $_POST["matricule"];
    $phone = $_POST["phone"];
    $niveau = $_POST["niveau"];
    $departement = $_POST["departement"];

    $updateData = [
     "nom" => $nom, 
     "prenom" => $prenom,
     "email" => $email, 
     "filiere" => $filiere, 
     "matricule" => $matricule,
     "phone" => $phone,
     "niveau" => $niveau,
     "departement" => $departement,

    ];
    $refTable = "candidats/".$id;
   $updateQuery =  $database->getReference($refTable)->update($updateData);
}

if($updateQuery)
{
    $_SESSION["status"] = "élément modifié!";
}
else 
{
    $_SESSION["status"] = "Modification échoué";
}



?>