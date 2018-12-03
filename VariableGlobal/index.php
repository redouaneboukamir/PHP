<?php
    session_start();
    $_SESSION['UserAgent']= $_SERVER['HTTP_USER_AGENT'] ;
    $_SESSION['Ip']=$_SERVER['REMOTE_ADDR'];
    $_SESSION['Serveur']=$_SERVER['SERVER_NAME'];
    $_SESSION['name']= "Boukamir";
    $_SESSION['surname']="Redouane";
    $_SESSION['age']=25;
    
    setcookie('Login',$_GET['login'],time()+ 365*24*3600); 
    setcookie('MDP',$_GET['password'],time()+ 365*24*3600); 


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
    <form action="" method="get">
        <label>Login </label><input type="text" name="login" >
        <label>Password </label><input type="password" name="password" >
        <input type="submit">
    </form>
    <p>
        <?php echo $_SESSION['UserAgent'];?>
    </p>
    <p>
        <?php echo $_SESSION['Ip']; ?>
    </p>
    <p>
        <?php echo $_SESSION['Serveur']; ?>
    </p>
    <a href="indexS.php">lien 2</a>

</body>
</html>