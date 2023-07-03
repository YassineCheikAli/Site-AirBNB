<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$data = json_decode(file_get_contents('php://input'), true);
if (!empty($data['mail']) && !empty($data['mot_de_passe'])) {
    try {       
        $mail = htmlspecialchars($data['mail']);
        $mot_de_passe = $data['mot_de_passe'];

        $verifUser = $bdd->prepare('SELECT * FROM users WHERE mail = :mail');
        $verifUser->execute(array(
            'mail' => $mail
        ));

        if ($verifUser->rowCount() > 0) {
            $response = array(
                'success' => false,
                'error' => "Cette adresse mail est déjà utilisé."
            );
        } else {
            $insertUser = $bdd->prepare('INSERT INTO users(mail, mot_de_passe) VALUES(:mail, :mot_de_passe)');
            $insertUser->execute(array(
                'mail' => $mail,
                'mot_de_passe' => $mot_de_passe,
            ));

            $response = array(
                'success' => true,
                'error' => "",
                'idusers' => $bdd->lastInsertId()
            );
        }

    }
    catch(Exception $e)
    {
        $response = array(
            'success' => false,
            'error' => $e->getMessage(),
            'idusers' => $bdd->lastInsertId()
        );
    }
} else {
    $response = array(
        'success' => false,
        'error' => "Les données reçues sont invalides."
    );
}

header('Content-Type: application/json');
echo json_encode($response);
?>
