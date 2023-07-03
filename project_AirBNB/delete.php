<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "continental_bd_test";

if (isset($_POST['id'])) {
    try {
        $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_POST['id'];

        // Exécutez votre code pour supprimer l'entrée correspondante de la base de données
        $query = "DELETE FROM utilisateur WHERE id = :id";
        $stmt = $connexion->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo "OK";
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
