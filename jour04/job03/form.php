<?php
/* Déclaration d'un tableau qui contiendra les paramètres du formulaire */
$elements = ['nom', 'prenom', 'age'];

/* J'initialise une variable count à 0 pour compter le nombre d'arguments de $POST */
$count = 0;

/* Je vérifie si le formulaire a été soumis via une requête POST
et si le bouton envoyer a été cliqué */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {

    /* Je place une boucle pour vérifier si les champs du formulaire ont été remplis */
    foreach ($elements as $value) {
        if (isset($_POST[$value]) && !empty($_POST[$value])) {
            $count++;
        }
    }

    /* J'affiche le nombre d'arguments POST envoyés */
    echo "Le nombre d'arguments POST envoyés est : " . $count;
}
?>