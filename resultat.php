<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:skyblue">
    <div >
  <h1 style ="text-align:center; font-size:60px; color:blue; ">RESULTAT</h1>
    <?php
 
     echo "<img style='height:400px;' src='resultat2.php' />"; 

?>
<?php
    include("DbConnection.php"); 
    $tableListe = "liste"; 
    $tableVote = "vote"; 
    $fetchListe = $database->getReference($tableListe)->getValue();
    $fetchVote = $database->getReference($tableVote)->getValue();
    $voie = array(); 
    $i=0; 
    $j=0;
    foreach($fetchListe as $key1 => $row1) 
    {
         foreach($fetchVote as $key2 => $row2)
         {
          if($key1 == $row2["cleListe"] )
          {
            $i++;
          }
          else 
          {
              $i=0; 
          }
         }
?>
<h2><?= $i; ?> </h2>

<?php

 }
?>
</div>
</body>
</html>