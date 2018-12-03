<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <!-- <form method="get" action="user.php">
        <label>Nom : </label><input type="text" name="name" id="name">
        <label>Prenom : </label> <input type="text" name="surname" id="surname" >
        <input type="submit" value="Envoyer"/>
    </form> -->
    <!-- <form method="post" action="user.php">
        <label>Nom : </label><input type="text" name="name" id="name">
        <label>Prenom : </label> <input type="text" name="surname" id="surname" >
        <input type="submit" value="Envoyer"/>
    </form>     -->
    <form method="post" action="user.php">
        <select name="Genre" id="Genre">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <label>Nom : </label><input type="text" name="name" id="name">
        <label>Prenom : </label> <input type="text" name="surname" id="surname" >
        <input type="submit" value="Envoyer"/>
    </form>

</body>
</html>