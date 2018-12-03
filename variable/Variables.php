<?php
    $nom =(string)'Boukamir';
    $prenom = (string)"Redouane";
    $Age = (integer)25;
    $km = (integer)1;
    $km = 3;
    $km = 125;
    $string = (string)"test";
    $int = (integer)5;
    $float = (float)2.5;
    $bool = (boolean)true;
    $testint = (integer)"";
    $testint = 345;
    $add = (integer)3+4;
    $multp = (integer)5*20;
    $div = (float)45/5;
    $tshirt = (integer)785;
    $ristourne = (float)785*0.3;
    $total = (float)$tshirt - $ristourne;
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
        echo 'Bonjour ' .$prenom. ', enfant de la famille ' .$nom.
        ' ayant atteint le level ' .$Age. ' !'; 
        ?></p>
        <br>
        <p><?php
        echo $km;
        ?></p>
        <br>
        <p><?php
        echo $string. " " .$int. " " .$float. " " .$bool;
        ?></p>
        <br>
        <p><?php
        echo $testint;
        ?></p>
        <p><?php
        echo "addition :" .$add. "<br>multiplication : " .$multp. "<br> division : " .$div;
        ?></p>
        <br>
        <p><?php
        echo "prix du t-shrit : " .$tshirt. 
        "<br> Montant ristourne : " .$ristourne. 
        "<br> Prix total : " .$total
        ?></p>
</body>
</html>