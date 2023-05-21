<?php
// Je déclare ma fonction
function calcule($nb1, $operator, $nb2){
// J'utilise une instruction switch pour les opérateurs
switch($operator){
    case '+':
        return $nb1 + $nb2;
    case '-':
        return $nb1 - $nb2;
    case '*':
        return $nb1 * $nb2;
    case '/':
        return $nb1 / $nb2;
    case '%':
        return $nb1 % $nb2;
    default:
        return "Opération non valide.";
}
}

// Appel de ma fonction calcule et session de test
echo "La somme de 5 + 5 est égal à " .calcule(5, '+', 5) ."<br>"; //Test de l'addition
echo "La soustraction de 2 à 10 est égal à " .calcule(10, '-', 2) ."<br>"; // Test de la soustraction
echo "La multiplication de 8 par 8 est égal à " .calcule(8, '*', 8) ."<br>"; // Test de la multiplication
echo "La division de 64 par 4 est égal à " .calcule(64, '/', 4) ."<br>"; // Test de la division
echo "Le reste de 8 par 4 est égal à " .calcule(8, '%', 4); // Test du modulo
?>