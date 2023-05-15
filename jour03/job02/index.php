<?php
/* Déclaration de ma variable */
$str ="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

/* Je souhaite obtenir le nombre de caractères de ma chaîne, 
j'initialise une variable $letters à 0 */
$letters = 0;

/* Je place ma première boucle pour parcourir la chaîne de caractères comprise dans $str
et incrémenter la valeur de $letters */
while(isset($str[$letters])){
    $letters ++;
}

/* Je place ma deuxième boucle pour pouvoir parcourir la chaîne de caractère comprise dans
 la variable $letters */
for($i = 0; $i < $letters; $i++){
    /* Je souhaite afficher un caractère sur deux en utilisant une vérification d'index
    paire ou impaire */
    if($i % 2 == 0){
        echo $str[$i];
    }
}
?>