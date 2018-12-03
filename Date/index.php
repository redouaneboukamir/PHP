<?php

$date = new DateTime();
// Date du jour 
echo date("d-m-Y");
echo "<br>";
// Date du jour 
echo date("d-m-y");
echo "<br>";
//   Date du jours en toutes lettre
$day = date('l');
$month = date('F');
switch($day) {
    case 'Monday': $day = 'Lundi'; break;
    case 'Tuesday': $day = 'Mardi'; break;
    case 'Wednesday': $day = 'Mercredi'; break;
    case 'Thursday': $day = 'Jeudi'; break;
    case 'Friday': $day = 'Vendredi'; break;
    case 'Saturday': $day = 'Samedi'; break;
    case 'Sunday': $day = 'Dimanche'; break;
    default: $day =''; break;
  }
switch($month) {
    case 'January': $month = 'Janvier'; break;
    case 'February': $month = 'Février'; break;
    case 'March': $month = 'Mars'; break;
    case 'April': $month = 'Avril'; break;
    case 'May': $month = 'Mai'; break;
    case 'June': $month = 'Juin'; break;
    case 'July': $month = 'Juillet'; break;
    case 'August': $month = 'Août'; break;
    case 'September': $month = 'Septembre'; break;
    case 'October': $month = 'Octobre'; break;
    case 'November': $month = 'Novembre'; break;
    case 'December': $month = 'Decembre'; break;
    default: $month =''; break;
  }
echo $day. ' ' .date('d'). ' ' .$month. ' ' .date('y');
echo "<br>";
// timestamp continu
echo time(). "<br>";
// TimeStamp du 2 aout 2016 15h00
echo mktime(15, 00, 00, 7, 2, 2016). "<br>";

// DateTime::date_diff cdifference de jour entre ajd et 16 mai 2016
$datetime1 = new DateTime('now');
$datetime2 = new DateTime('2016-05-16');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%a jours<br>');

// nombre de jours dans le mois février
$mois = mktime( 0, 0, 0, 2, 1, 2016 ); 
echo "Le mois de ".date("F Y",$mois)." possède ".date("t",$mois)." jours<br>";

// Date du jour +20
echo date('d')+20. .date('-m-Y')."<br>";
// Date du jour -22
echo date('d')-22. .date('-m-Y'). "<br>";

$MoisCal = $_POST['Mois'];
$AnneeCal = $_POST['Annee'];
echo date('l-w-m-y',mktime(0,0,0,$MoisCal-1,1,$AnneeCal-1));
$JourDebutMois = date('w',mktime(0,0,0,$MoisCal-1,1,$AnneeCal-1));
$NbJourMois = date('t',mktime(0,0,0,$MoisCal,0,$AnneeCal-1));
echo "<br>";
echo $NbJourMois. "<br>" .$JourDebutMois;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
            <select name="Mois" id="">  
                <?php
                    for($i=2; $i<14;$i++){
                        $MoisSelect = date('F',mktime(0,0,0,$i,0,0));
                ?>
                    <option value="<?php echo $i;?>" >
                <?php
                    echo $MoisSelect;
                    }; 
                ?>
                    </option>
            </select>
            <select name="Annee" id="">
                <?php
                    
                    for($i=19; $i<50;$i++){
                        $AnneeSelect = date('Y',mktime(0,0,0,0,0,$i));
                ?>
                    <option value="<?php echo $i; ?> ">
                <?php
                    echo $AnneeSelect;
                    }; 
                ?>
                    </option>
            </select>
            <input type="submit">
    </form>
            <table >
                    <tr>
                        <td colspan="7" class="td"><?php 
                        switch($MoisCal) {
                            case 2: echo "Janvier"; break;
                            case 3: echo 'Février'; break;
                            case 4: echo 'Mars'; break;
                            case 5: echo 'Avril'; break;
                            case 6: echo 'Mai'; break;
                            case 7: echo 'Juin'; break;
                            case 8: echo 'Juillet'; break;
                            case 9: echo 'Août'; break;
                            case 10: echo 'Septembre'; break;
                            case 11: echo 'Octobre'; break;
                            case 12: echo 'Novembre'; break;
                            case 13: echo 'Decembre'; break;
                          }?></td>
                    </tr>
                    <tr>
                        <td>Lundi</td>
                        <td>Mardi</td>
                        <td>Mercredi</td>
                        <td>Jeudi</td>
                        <td>Vendredi</td>
                        <td>Samedi</td>
                        <td>Dimanche</td>
                    </tr>
                    <?php
                        echo '<tr>';
                        for( $i=1 ; $i < $JourDebutMois;$i++){
                            echo '<td></td>';
                        };
                        for($j = 1; $j < $NbJourMois+1;$j++){
                            if(($j%7)==0){
                                echo "<tr></tr>";
                                $Nbtd = 0;
                            };
                            echo '<td>'.$j.'</td>';
                            $Nbtd++;
                        };          
                        for($k=$Nbtd; $k < 7; $k++){
                            echo '<td></td>';
                        }          


                    ?>
                       
            </table>

</body>
</html>