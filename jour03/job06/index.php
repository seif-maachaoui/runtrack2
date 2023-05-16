<?php

/*Déclaration de ma variable $str */
$str = "Les choses que l'on possède finissent par nous posséder.";

/* Déclaration d'une variable letters pour stocker la longueur de la chaîne $str */
$letters = 0;

/*Déclaration d'une variable qui contient une chaîne vide */
$new_string = "";

/* Je calcule la longueur de la chaîne $str et la stocke à l'intérieur de $letters */
while(isset($str[$letters])){
    $letters++;
}

/* Petit test pour vérifier les valeurs */
echo $str ."<br>";
echo "la phrase contient actuellement " .$letters ." caractères" ."<br>";

/* Je place une boucle pour pouvoir utiliser la décrémentation */
for($i = $letters -1; $i >= 0; $i--){
    $new_string .= $str[$i];
}

/* Affichage du résultat */
echo $new_string ;

?>