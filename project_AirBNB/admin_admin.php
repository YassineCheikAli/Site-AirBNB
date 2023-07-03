<?php
// Connexion à la base de données
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'continental_bd_test';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Traitement de la soumission du formulaire
if (isset($_POST['user_id']) && isset($_POST['user_table'])) {
    $user_id = $_POST['user_id'];
    $user_table = $_POST['user_table'];

    if ($user_table == 'admin_gestion') {
        $table_name = 'admin_gestion';
        $role = 'Admin Gestion';
    } elseif ($user_table == 'admin_entretien') {
        $table_name = 'admin_entretien';
        $role = 'Admin Entretien';
    }

    // Insertion de l'ID de l'utilisateur dans la table choisie
    $sql = "INSERT INTO $table_name (user_id) VALUES ('$user_id')";
    $result = $conn->query($sql);

    if ($result) {
        echo "L'ID de l'utilisateur a été inséré avec succès dans la table $table_name.";

        // Mise à jour du rôle dans la table "utilisateur"
        $updateSql = "UPDATE utilisateur SET role='$role' WHERE id='$user_id'";
        $updateResult = $conn->query($updateSql);

        if ($updateResult) {
            echo "Le rôle de l'utilisateur a été mis à jour avec succès dans la table utilisateur.";
        } else {
            echo "Erreur lors de la mise à jour du rôle de l'utilisateur : " . $conn->error;
        }
    } else {
        echo "Erreur lors de l'insertion de l'ID de l'utilisateur : " . $conn->error;
    }
}

// Récupération de la liste des utilisateurs
$sql = "SELECT * FROM utilisateur";
$result = $conn->query($sql);

// Fermeture de la connexion à la base de données
$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Administration des utilisateurs</title>
</head>
<body>
    <h2>Administration des utilisateurs</h2>
    
    <form method="POST" action="">
        <label for="user_id">Utilisateur :</label>
        <select name="user_id" id="user_id">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nom'] . "</option>";
                }
            } else {
                echo "<option>Aucun utilisateur trouvé</option>";
            }
            ?>
        </select>

        <label for="user_table">Table :</label>
        <select name="user_table" id="user_table">
            <option value="admin_gestion">Admin Gestion</option>
            <option value="admin_entretien">Admin Entretien</option>
        </select>

        <input type="submit" value="Insérer l'ID">
    </form>
</body>
</html>
