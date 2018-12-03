<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  <?php
  // if($_GET['age']){
  //   echo $_GET['nom'];
  //   echo $_GET['prenom'];

  // }else{
  //   echo "aucun paramètre age existant";
  // }
  // if($_GET['dateDebut'] && $_GET['dateFin']){
  //   echo $_GET['dateDebut']. "-" .$_GET['dateFin'] ;
  // }else{
  //   echo "aucun paramètre date existant";
  // }
  //   if($_GET['langage'] && $_GET['serveur']){
  //   echo $_GET['langage']. "-" .$_GET['serveur'] ;
  // }else{
  //   echo "aucun paramètre existant";
  // }
  // if($_GET['semaine']){
  //   echo $_GET['semaine'];
  // }else{
  //   echo "pas de semaine";
  // };
  if($_GET['batiment'] && $_GET['salle']){
    echo $_GET['batiment']. " et "  .$_GET['salle'];
  }else{
    echo "nothing in parameter";
  }
  
  ?>
</body>
</html>