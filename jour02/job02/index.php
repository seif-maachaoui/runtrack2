<?php

/* Je souhaite afficher les valeurs comprises entre 0 et 1337 */
for($x = 0 ; $x <= 1337; $x++){
    /* La fonction isset vérifie si une variable est déjà définie puis je vérifie sa valeur */
    if(isset($x) && ($x == 27 || $x == 37 || $x == 88 || $x == 1111 || $x == 3233)){
        echo " ";
    }
    /* Sinon continue à afficher la valeur de $x */
    else{
        echo $x ."<br>";
    }
}

?>