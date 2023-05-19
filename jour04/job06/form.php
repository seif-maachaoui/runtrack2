<?php

//Je déclare mon tableau qui contiendra les paramètre du formulaire
$elements = ['number'];

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['btn'])){

    // Je parcours mon tableau éléments
    foreach ($elements as $value) {
        // Je vérifie si les champs ont été rempli et qu'ils ne soient pas vide.
        if (isset($_GET[$value]) && !empty($_GET[$value])) {
            echo "<p style='color:green'>Validation du formulaire !</p><br>";
        } else {
             echo "<p style='color:red'>Veuillez entrer un nombre.</p><br>";
            break;
        }
    }

    // Je vérifie ensuite si le nombre entré est pair ou bien impair
    if ($_GET['number'] % 2 === 0) {
        echo "C'est un nombre pair";
    } else {
        echo "C'est un nombre impair";
    }


}

?>