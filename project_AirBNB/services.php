<?php

if (isset($_POST['service'])) {
  // Récupérer les valeurs des cases à cocher depuis le formulaire
  $reception = isset($_POST['service']['reception']) ? 1 : 0;
  $chef = isset($_POST['service']['chef']) ? 1 : 0;
  $package = isset($_POST['service']['package']) ? 1 : 0;

  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "continental_bd";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
  }

  // Préparer et exécuter la requête SQL pour insérer les valeurs dans la base de données
  $stmt = $conn->prepare("INSERT INTO `reservation` (reception, chef, package) VALUES (?, ?, ?)");
  $stmt->bind_param("iii", $reception, $chef, $package);

  if ($stmt->execute()) {
    echo "Les informations ont été stockées avec succès dans la base de données.";
    // Ajoutez ici une redirection ou un message de confirmation pour l'utilisateur
  } else {
    echo "Une erreur s'est produite lors de l'enregistrement des informations dans la base de données : " . $stmt->error;
  }

  // Fermer la connexion à la base de données
  $stmt->close();
  $conn->close();
}
?>
