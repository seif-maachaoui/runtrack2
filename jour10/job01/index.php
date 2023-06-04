<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="style.css">
        <title>Jour10-job01</title>
    </head>
    <body>
        
        <?php

            require_once 'config.php';

            // Récupérer les informations de tous les utilisateurs
            $get = $conn->prepare("SELECT * FROM etudiants");
            $get->execute();
            $users = $get->fetchAll();

            // Entête du tableau html
            echo "<h1>Table étudiants</h1>";
            echo "<table>";

                echo "<tr>";
                    echo "<th>Prénom</th>";
                    echo "<th>Nom</th>";
                    echo "<th>Naissance</th>";
                    echo "<th>Sexe</th>";
                    echo "<th>Email</th>";
                echo "</tr>";

                // Contenu du tableau HTML
                echo "<tbody>";

                    foreach ($users as $user) {
                        echo "<tr>";
                        echo "<td>" . $user['prenom'] . "</td>";
                        echo "<td>" . $user['nom'] . "</td>";
                        echo "<td>" . $user['naissance'] . "</td>";
                        echo "<td>" . $user['sexe'] . "</td>";
                        echo "<td>" . $user['email'] . "</td>";
                        echo "</tr>";
                    }
                echo "</tbody>";
            echo "</table>";

            
            
        ?>

    </body>
</html>

