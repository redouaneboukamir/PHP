<?php

function LongestWord($send){

    $Tab = explode (' ',$send);
    $PlusG = 0;

    for($i=0; $i < count($Tab) ; $i++){

        if(strlen($Tab[$i]) > strlen($PlusG)){
            $PlusG = $Tab[$i];
        }  
    }
    
    echo "Le mot le plus grand est " .$PlusG;
}

LongestWord("redouan premier mot deuxiem mot redouan trouver retoureds");
?>

