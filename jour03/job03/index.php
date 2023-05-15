<?php
/* Je déclare ma variable */
$str = "I'm sorry Dave I'm afraid I can't do that.";


/* J'initialise une variable letters pour stocker la longueur de ma chaîne */
$letters = 0;

/* J'utilise une boucle while pour pouvoir stocker la longueur de la chaîne comprise
dans $str à l'intérieur de la variable $letters */
while (isset($str[$letters])) {
    $letters++;
}

/* J'initialise un tableau nommé voyelle */
$voyelle = ['a', 'e', 'i', 'o', 'u', 'y'];

echo "Dans la phrase, " .$str ."<br>";

/* Je parcours la chaîne comprise dans $letters pour vérifier
si l'index est une voyelle ou non */
for($i = 0; $i < $letters; $i++){
    /* L'état de ma variable verify est d'abord à faux */
    $verify = false;

    /* Deuxième boucle qui va vérifier si les lettres correspondent à des voyelles */
    foreach($voyelle as $values){

        if ($str[$i] == $values){
            $verify = true;
            echo $str[$i] ." est une voyelle" ."<br>";
            break;
        }
      
    } 
}
?>