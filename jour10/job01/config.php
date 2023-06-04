<?php
    // Connexion à la base de données avec PDO (PHP Data Objects)
    $servername = 'localhost'; // L'adresse du serveur MariaDB
    $username = 'root'; // le nom de l'utilisateur
    $password = ''; // le mot de passe 
    $database = 'jour09'; // Le nom de la base de donnée

    // On essaie de se connecter au serveur MariaDB en utilisant PDO
    try {
        $dsn = "mysql:host={$servername};port=3307;dbname={$database}";
        $conn = new PDO($dsn, $username, $password);
        // Autres opérations sur la base de données...
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>
