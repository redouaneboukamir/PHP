<?php
// $age = (integer)18;
if($age >= 18){
    echo "majeur";
}else{
    echo "mineur";
};
$IsEasy = (boolean)true;
if($IsEasy){
    echo "<br>c'est facile";
}else{
    echo "<br>c'est difficile";
}
switch($IsEasy){
    case true:  echo "<br>c'est facile";
    break;
    case false: echo "<br>c'est difficile";
    break;
}
$age = (integer)12;
$genre = (string)"femme";
if($age >= 18 && $genre == "homme"){
    echo "<br> Vous êtes un homme majeur";
}else if($age < 18 && $genre == "homme"){
    echo "<br> Vous êtes un homme mineur";
}else if($age >= 18 && $genre == "femme"){
    echo "<br> Vous êtes une femme majeur";
}else{
    echo "<br> Vous êtes une femme mineur"; 
}

$magnitude = (integer)9;
switch($magnitude){
    case 1: echo "<br>Micro-séisme impossible à ressentir.";
    break;
    case 2: echo "<br>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres." ;
    break;
    case 3: echo "<br>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti." ;
    break;
    case 4: echo "<br>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    case 5: echo "<br> Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    case 6: echo "<br> Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    case 7: echo "<br> Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 8: echo "<br> Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    case 9: echo "<br> Séisme capable de tout détruire sur une très vaste zone.";
    break;
}
$maVariable = "femme";
if($maVariable == "homme"){
    echo "<br> c'est un developpeur !!!";
}else {
    echo "<br> c'est une developpeuse";
}
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
    <p><?php
    
        ?></p>
</body>
</html>