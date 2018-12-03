<?php
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $file = new SplFileInfo($_POST["file"]);
 
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
        if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['file'])){
            echo $name. " - " .$surname. "<br> Extension du fichier : ";
            if($file->getExtension() == "pdf"){
                echo "le fichier est un pdf";
            }else{
                echo "le fichier n'est pas un pdf";
            };
        }else{
            ?>
            <form method="post" action="index.php">
                <select name="Genre" id="Genre">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <label>Nom : </label><input type="text" name="name" id="name">
                <label>Prenom : </label> <input type="text" name="surname" id="surname" >
                <input type="file" name="file">
                <input type="submit" value="Envoyer"/>
            </form>
         <?php   
        }
        ?>
</body>
</html>