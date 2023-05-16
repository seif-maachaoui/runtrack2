<?php
/*Déclaration de ma variable $str */
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

/* Déclaration d'une variable letters pour stocker la longueur de la chaîne $str */
$letters = 0;

/* Variable pour stocker le premier caractère de $str*/
$first_letter = $str[0];

/* Je calcule la longueur de la chaîne $str et la stocke à l'intérieur de $letters */
while(isset($str[$letters])){
    $letters++;
}
/* Une boucle pour parcourir la chaîne comprise dans $letters et remplaçer les
caractères */
for($i = 0; $i < $letters -1; $i++){
    $str[$i] = $str[$i + 1];
}

/* Je remplace le dernier caractère par le premier*/
$str[$letters- 1] = $first_letter;

/* Affichage du résultat */
echo $str;

?>