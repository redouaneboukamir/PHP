<?php

$Nb1 = $_POST["NbC1"];
$Nb2 = $_POST["NbC2"];
$Operator = $_POST["Operateur"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Assets/style.css">
    <title>Calculatrce</title>
</head>
<body>
    <form action="index.php" method="post">
        <label  >Nombre 1</label>
        <input type="number" name="NbC1" id="Nb1" class="">
        <label >Nombre 2</label>
        <input type="number" id="Nb2" name="NbC2" >
        <select name="Operateur" id="Operateur">
            <option value="Add">+</option>
            <option value="Sous">-</option>
            <option value="Div">/</option>
            <option value="Mult">*</option>
            <option value="Mod">%</option>
        </select>
        <input type="submit" value="=">
    </form>
        <button id="Clear">C</button>
    <?php
    if(empty($_POST["NbC1"]) && empty($_POST["NbC2"])){
        echo "<span class = \"Erreur0\"> Remplir les champs </span>";

    }else{
        if($Nb1 == 0 && $Operator == "Div" || 
        $Nb2 == 0 && $Operator == "Div"){
            echo "<span class = \"Erreur0\"> Pas de division par Zero </span>";
        }else{
            switch ($Operator) {
                case 'Add':
                $Som = $Nb1 + $Nb2;
                print $Som;
                break;
                case 'Sous':
                $Diff = $Nb1 - $Nb2;
                print $Diff;
                break;
                case 'Div': 
                $Divid = $Nb1 / $Nb2;
                print $Divid;
                break;
                case 'Mod':
                $Modu = $Nb1 % $Nb2;
                print $Modu;
                break;
                default:
                $Multip = $Nb1 * $Nb2;
                print $Multip;
                break;
            }
        }
    }
    ?>

        
    <script src="Assets/index.js"></script>
</body>
</html>