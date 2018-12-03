<?php
$mois = array(
    "janvier","fevrier","mars","avril","mai","juin","juillet",
    "aout","septembre","octobre","novembre","decemebre"
);
$mois[7] = "août";
$Departement = array(
    "01" => "Ain",
    "03" => "Allier",
    "07" => "Ardèche",
    "15" => "Cantal", 
    "26" => "Drôme", 
    "38" => "Isère", 
    "42" => "Loire", 
    "43" => "Haute-Loire", 
    "63" => "Puy-de-Dôme",
    "69" => "Rhône",
    "73" => "Savoie", 
    "74" =>"Haute-Savoie",
);
$prenom = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

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
    $Departement["99"] = 'Metz';
    foreach($Departement as $cle => $Valeur){
        echo "<br> le numero deparatement : " .$cle. ": " .$Valeur;
    };
    foreach($prenom as $valeur){
        echo "<br>salut " .$valeur. " devine quoi! Je me marie samedi dans
        deux semaines! j'espere te compté parmis mes invités!";
    }
    ?>
</body>
</html>