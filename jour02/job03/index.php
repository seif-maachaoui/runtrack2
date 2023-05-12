<?php
/* Je place ma boucle for ainsi que mes conditions */
for($x = 0; $x <= 100; $x++){
    if($x <= 20){ /* Si les nombres sont compris entre 0 et 20 */
        echo "<i>" .$x ."</i>" ."<br>";
    }
    elseif($x >= 25 && $x <= 50){ /* Si les nombres sont compris entre 25 et 50 */
        echo "<u>" .$x ."</u>" ."<br>";
    }
    elseif($x == 42){ /* Si la valeur de $x est égal à 42, alors je la remplace par.. */
        $x = "La Plateforme";
        echo $x;
    }
    else{ /* Sinon continue d'afficher la valeur de $x */
        echo $x ."<br>";
    }
}
?>