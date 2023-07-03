<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "continental_bd_test";
$id= $_SESSION['id'];


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}








if (isset($_POST['message'])) {
   
    $message = $_POST['message'];

    
    $sql = "INSERT INTO messagerie (contenu, id_sender) VALUES (?,'".$id."')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $message); 

   
    if ($stmt->execute()) {
        echo "Message enregistré avec succès";
        header("Location: message.html");
    } else {
        echo "Erreur lors de l'enregistrement du message : " . $stmt->error;
    }

    
    $stmt->close();
}


$conn->close();
?>
