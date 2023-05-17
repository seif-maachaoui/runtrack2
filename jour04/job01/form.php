<?php
/* Déclaration d'un tableau qui contiendra les paramètres du formulaire */
$elements = ['nom', 'prenom', 'age'];

/* J'initialise une variable count à 0 pour compter le nombre d'arguments de $GET */
$count = 0;

/* Je vérifie si le formulaire a été soumis via une requête GET
et si le bouton envoyer a été cliqué */
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])) {

    /* Je place une boucle pour vérifier si les champs du formulaire ont été remplis */
    foreach ($elements as $value) {
        if (isset($_GET[$value]) && !empty($_GET[$value])) {
            $count++;
        }
    }

    /* J'affiche le nombre d'arguments GET envoyés */
    echo "Le nombre d'arguments GET envoyés est : " . $count;
}
?>