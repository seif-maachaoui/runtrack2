<?php

//Je déclare mon tableau qui contiendra les paramètre du formulaire
$elements = ['username', 'password'];

// Si le formulaire à été soumis avec une méthode Post et si le bouton envoyer à été cliqué
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])){


    // Je parcours mon tableau éléments
    foreach ($elements as $value) {
        // Je vérifie si les champs ont été rempli et qu'ils ne soient pas vide.
        if (isset($_POST[$value]) && !empty($_POST[$value])) {
            echo "<p style='color:green'>Enregistrement réalisé avec succès !</p><br>";
            break;
        } else {
            echo "<p style='color:red'>Veuillez remplir tous les champs.</p><br>";
            break;
        }
    }

    // Je vérifie ensuite si le nom correspond à John et le mdp à Rambo
    if ($_POST['username'] === 'John' && $_POST['password'] === 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }


}


?>