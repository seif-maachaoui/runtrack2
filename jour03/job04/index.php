<?php
/*Déclaration de mes variables */
$str = "Dans l'espace, personne ne vous entend crier.";

/* j'initialise une variable length pour stocker la longueur de la chaîne*/
$length = 0;

/* Je créer une boucle pour stocker la longueur de la chaîne dans $length */
while(isset($str[$length])){
    $length++;
}

/* Affichage du résultat */
echo $str ."<br>";
echo "Cette phrase contient " .$length ." caractères";

?>