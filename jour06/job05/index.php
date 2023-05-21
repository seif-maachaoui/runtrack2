<?php
// Déclaration de ma fonction
function occurences($str, $char){
    // Je déclare une variable pour compter le nombre d'occurences
    $count = 0;
    
    // Une boucle pour parcourir la chaîne comprise dans $str
    // Puis je vérifie si chacun des caractères correspond à celui dans $char
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] === $char) { 
            $count++;
        }
    }
    // Enfin je retourne la valeur de $count
    return $count;
}

// J'appelle ma fonction et je procède à un test
echo "Par exemple, pour Bonjour, <br> il y a " .occurences('Bonjour', 'o') ." fois, la lettre 'o'";



?>