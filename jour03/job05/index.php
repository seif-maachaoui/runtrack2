<?php

/* Déclaration de mes variables */
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

/* Je déclare une variable pour stocker la longueur de la chaîne comprise
dans $str */
$letters = 0;


/*Je déclare deux variables pour pouvoir compter le nombre de consonnes et de voyelles */
$nb_consonnes = 0;
$nb_voyelles = 0;



/* Déclaration de mon dictionnaire */
$dic = array (
'consonnes' => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x'],
'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y']
);

/* Je commence par la boucle while pour stocker la longueur de chaîne comprise
dans $str à l'intérieur de $letters */
while(isset($str[$letters])){
    $letters++;
}

/* Je parcours la chaîne de caractère comprise dans $letters */
for($i = 0 ; $i < $letters; $i++){
    /*J'initialise une variable à true pour vérifier chaque caractère*/
    $verify = true ; 

    /* Une boucle pour vérifier si les lettres correspondent à des consonnes */
    foreach($dic['consonnes'] as $consonne){
        if ($str[$i] == $consonne){
            $verify = false;
            $nb_consonnes++;
            break;
            
        }
    }

    /* Une boucle pour vérifier si les lettres correspondent à des voyelles */
    foreach($dic['voyelles'] as $voyelle){
        if ($str[$i] == $voyelle){
            $verify = true;
            $nb_voyelles++;
            break;
            
        }
    }

}

/* Affichage du résultat pour s'assurer que cela fonctionne */
echo "il y a exactement " .$nb_voyelles ." voyelles <br>";
echo "il y a exactement " .$nb_consonnes ." consonnes";

/* Mise en place du tableau HTML */
echo "<table border style='margin:5% auto'>";

/* L'en-tête du tableau, suivi de la ligne du tableau et enfin
les cellules d'en-tête*/
echo "<thead>
    <tr> 
        <th>Consonnes</th>
        <th>Voyelles</th>
    </tr>
   </thead>";

/* le corps du tableau, suivi de la ligne du tableau et des 
cellules du tableau,  */
   echo "<tbody>";
   echo "<tr>
        <td>" .$nb_consonnes ."</td>
        <td>" .$nb_voyelles ."</td>
    </tr>";

?>