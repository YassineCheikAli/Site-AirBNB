<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd_test;charset=utf8;', 'root', 'root');
$bdd1 = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

// Vérifiez la connexion à la base de données
if (!$bdd) {
    die("Erreur de connexion à la base de données");
}

// Récupérez les valeurs modifiées du formulaire
$titre = $_POST['titre'];
$prix = $_POST['prix'];
$nbLits = $_POST['nbLits'];
$nbDouches = $_POST['nbDouches'];
$nbPersonnes = $_POST['nbPersonnes'];
$description = $_POST['description'];
$dateEntree = $_POST['dateEntree'];
$dateSortie = $_POST['dateSortie'];

// Effectuez les requêtes SQL pour mettre à jour les valeurs dans la base de données
// Exemple : Mise à jour du titre et du prix du logement
$query = "UPDATE logements SET titre = :titre, prix = :prix WHERE id = :logement_id";
$stmt = $bdd->prepare($query);
$stmt->bindParam(':titre', $titre);
$stmt->bindParam(':prix', $prix);
$stmt->bindParam(':logement_id', $logement_id); // Remplacez ":logement_id" par l'identifiant réel du logement
$stmt->execute();

// Répétez les étapes ci-dessus pour mettre à jour les autres valeurs du logement

// Fermez la connexion à la base de données
$bdd = null;

// Envoyez une réponse JSON pour indiquer le succès
$response = array('success' => true);
echo json_encode($response);
?>
