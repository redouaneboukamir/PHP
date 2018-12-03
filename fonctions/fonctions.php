<?php
// function test(){
//     return true;
// };
// function chaine($Chaine){
//     echo $Chaine;
// };
// function TwoChaine($Prenom, $Nom){
//     echo $Prenom. $Nom;
// }
// function TwoNumber($Nb1, $Nb2){
//     if($Nb1 > $Nb2){
//         echo "Le nombre est plus grand";
//     }else if($Nb1 < $Nb2){
//         echo 'Le nombre est plus petit';
//     }else {
//         echo 'Identique';
//     }
// }
// function NPA ($Nom , $Prenom, $Age){
//     echo "Bonjour " .$Nom. " " .$Prenom. ", tu as " .$Age. "ans.";
// };
// function genre ($genre , $age){
//     if($age >= 18 && $genre == "homme"){
//         echo "<br> Vous êtes un homme majeur";
//     }else if($age < 18 && $genre == "homme"){
//         echo "<br> Vous êtes un homme mineur";
//     }else if($age >= 18 && $genre == "femme"){
//         echo "<br> Vous êtes une femme majeur";
//     }else{
//         echo "<br> Vous êtes une femme mineur"; 
//     }
// }
function somme($nb1 = 2, $nb2 = 3, $nb3 = 10){
    echo $nb1 + $nb2 + $nb3;
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
    <?php
    // chaine("redouane");
    // TwoChaine("Redouane"," Boukamir");
    // TwoNumber(2,2);
    // NPA("Boukamir","Redouane",25);
    // genre("femme", 4);
    somme(20,1,1);
    ?>
</body>
</html>