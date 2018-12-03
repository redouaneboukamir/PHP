<?php

session_start();

echo $_COOKIE['Login'];
echo $_COOKIE['MDP'];
?>

<a href='index.php'>Retour vers lien 1</a>
<section>
<h3>Name : <?php echo $_SESSION['name'] ?></h3>
<h3>Surname : <?php echo $_SESSION['surname'] ?></h3>
<h3>Age : <?php echo $_SESSION['age'] ?></h3>
</section>