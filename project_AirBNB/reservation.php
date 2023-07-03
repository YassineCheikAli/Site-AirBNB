<?php

$dateEntree = isset($_POST['date_entree']) ? $_POST['date_entree'] : '';
$dateSortie = isset($_POST['date_sortie']) ? $_POST['date_sortie'] : '';

if (!empty($dateEntree) && !empty($dateSortie)) {
    
    $dateEntree = date('Y-m-d', strtotime($dateEntree));
    $dateSortie = date('Y-m-d', strtotime($dateSortie));

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "continental_bd_test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données: " . $conn->connect_error);
    }

    $sql = "INSERT INTO reservation (date_de_debut, date_de_fin) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $dateEntree, $dateSortie);

    if ($stmt->execute()) {
        echo "Les informations de réservation pour les dates du $dateEntree au $dateSortie ont été enregistrées avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement des informations de réservation: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Veuillez remplir toutes les informations de réservation.";
}

?>
