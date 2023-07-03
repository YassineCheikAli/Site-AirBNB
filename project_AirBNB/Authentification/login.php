<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['mail']) && isset($data['mot_de_passe'])) {
    $mail = htmlspecialchars($data['mail']);
    $mot_de_passe = sha1($data['mot_de_passe']);

    $recupUser = $bdd->prepare('SELECT * FROM users WHERE mail = :mail AND mot_de_passe = :mot_de_passe');
    $recupUser->execute(array(
        'mail' => $mail,
        'mot_de_passe' => $mot_de_passe
    ));

    if ($recupUser->rowCount() > 0) {
        $user = $recupUser->fetch();

        $recupjeton = $bdd->prepare('SELECT jeton FROM jetons WHERE user_id = :user_id');
        $recupjeton->execute(array(
            'user_id' => $user['id']
        ));

        if ($recupjeton->rowCount() > 0) {
            echo json_encode(array('success' => false, 'error' => "Vous êtes déjà connecté."));
        } else {
            $jeton = bin2hex(random_bytes(16));

            $insertjeton = $bdd->prepare('INSERT INTO jetons(user_id, jeton) VALUES(:user_id, :jeton)');
            $insertjeton->execute(array(
                'user_id' => $user['id'],
                'jeton' => $jeton
            ));

            echo json_encode(array('success' => true, 'mail' => $user['mail'], 'id' => $user['id'], 'jeton' => $jeton));
        }
    } else {
        echo json_encode(array('success' => false, 'error' => "Votre mot de passe ou mail est incorrect..."));
    }
} else {
    echo json_encode(array('success' => false, 'error' => "Veuillez compléter tous les champs..."));
}
?>