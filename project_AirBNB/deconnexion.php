<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

if (isset($_SESSION['id']) AND isset($_SESSION['mail']) AND isset($_SESSION['jeton'])) {
    $url = 'http://localhost:8888/Project_Hetic/Authentification/logout.php';
    $data = array('jeton' => $_SESSION['jeton']);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    var_dump($result);
    if ($result === FALSE) {
        echo "Une erreur est survenue lors de la déconnexion.";
    } else {
        $response = json_decode($result, true);
        var_dump($response);
        if ($response['success']) {
            $_SESSION = array();
            session_destroy();
            header('Location: Main_menu.php');
            exit();
        } else {
            echo $response['error'];
        }
    }
} else {
    header('Location: Main_menu.php');
    exit();
}
