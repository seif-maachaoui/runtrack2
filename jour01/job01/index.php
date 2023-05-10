<?php
/* Déclaration de ma variable */
$str = "LaPlateforme";

/*J'affiche le contenu de ma variable avec $ */
echo "$str <br>";

/* Je déclare d'autres variables */
$str2 = "Vive";
$str3 = "!";

/* Je concatène le contenu de mes variables avec des points */
echo $str2 ." " .$str ." " .$str3 ."<br>";

$val = 6;

/* J'affiche une phrase avant la concaténation en utilisant la virgule */
echo "La valeur actuelle est" ." " .$val ."<br>";
echo "Je rajoute quatre à ma valeur et j'obtient" ." " .($val + 4) ."<br>" ;

/* Je déclare une variable en affectant la valeur true */
$myBool = true;
    echo "La valeur de myBool est" ." " .$myBool ."<br>";

/* Modification de ma variable $myBool */
$myBool = false;

/* Ici j'utilise la fonction intval() pour pouvoir convertir la valeur de false en entier */
/* Avec cette méthode j'obtient donc la valeur entière 0 au lieu d'une chaîne vide en str */
    echo "Après modification, la valeur de myBool est" ." "  .intval($myBool);
?>