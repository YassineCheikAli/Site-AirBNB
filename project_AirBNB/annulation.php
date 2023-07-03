<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "continental_bd_test";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['annulation'])) {
        $id = $_SESSION['id']; // Supposons que l'identifiant de la réservation est passé en tant que paramètre

        // Supprimer la réservation de la base de données
        $deleteQuery = "DELETE FROM reservation WHERE id = :id";
        $deleteStatement = $connexion->prepare($deleteQuery);
        $deleteStatement->bindParam(':id', $id);
        $deleteStatement->execute();

        // Redirection vers la page d'accueil
        header("Location: deconnexion.php");
        exit();
    }

    // Exécuter votre code pour récupérer les données de la base de données

    // Par exemple, pour récupérer toutes les lignes de la table "reservation"
    $query = "SELECT * FROM reservation";
    $result = $connexion->query($query);


} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
