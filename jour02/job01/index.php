<?php

/* Je commence par déclarer ma variable*/
$x = 0;

while ($x <= 1337) { /* Tant que ma variable est inférieur ou égal à 1337 */

    if ($x == 42) { /* Si $x est égal à 42 alors... */
        echo "<b><u>" . $x . "</u></b><br>"; /*mettre la valeur 42 en gras et la surligner */
    } 

    else { /* Sinon, continue à afficher la valeur de $x */
        echo $x . "<br>";
    }
$x++;
}
?>