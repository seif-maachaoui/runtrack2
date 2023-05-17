<?php
/* Déclaration d'un tableau qui contiendra les paramètres du formulaire */
$elements = ['nom', 'prenom'];

/* Je vérifie si le formulaire a été soumis via une requête POST
et si le bouton envoyer a été cliqué */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])){
    
      /* Je place une boucle pour vérifier si les champs du formulaire ont été remplis */
      foreach ($elements as $value) {
        //Si le champ à été rempli et qu'il n'est pas vide alors...
        if (isset($_POST[$value]) && !empty($_POST[$value])) {
            echo "<p style='color:green'>Enregistrement réalisé avec succès !</p>";
            break;    
        }
    }
}

/* Mise en place du tableau HTML */
echo "<table border style='margin:5% auto'>";

/* L'en-tête du tableau, suivi de la ligne du tableau et enfin
les cellules d'en-tête*/
echo "<thead>
    <tr> 
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
   </thead>";

/* le corps du tableau, suivi de la ligne du tableau et des 
cellules du tableau */

// Lecture des données avec $POST au sein d'un tableau 
   echo "<tbody>";
    echo "<tr>
    <td>" .$elements[0] ."</td>
    <td>" .$_POST['nom'] ."</td>
    </tr>

    <tr>
    <td>" .$elements[1] ."</td>
    <td>" .$_POST['prenom'] ."</td>
    </tr>";

?>