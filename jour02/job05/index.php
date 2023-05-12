<?php
/* Je commence par créer une variable pour vérifier si un nombre est premier */
$is_primary = true ;

/* Première boucle pour parcourir les nombre de 2 jusqu'à 1000 */
for($i = 2; $i <= 1000; $i++){
    /* Deuxième boucle pour vérifier si les nombres sont des nombres premier */
    for($n =2; $n < $i ; $n++){
        /* Si le reste du nombre divisé par i est égal à zéro alors il ne sera pas premier */
        if($i % $n == 0){
            echo $i . " n'est pas un nombre premier <br>";
            $is_primary = false;
            break;
        }    
    }
    /* Si un nombre est premier alors...*/
    if($is_primary == true){
        echo $i . " est un nombre premier <br>";
    }
    /*#On change l'état de la variable is_primary en True, en dehors des conditions
    pour que l'opération puisse se réitérer. */
    $is_primary = true;
}
?>