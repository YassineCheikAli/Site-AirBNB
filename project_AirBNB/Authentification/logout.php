<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root');

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['jeton'])) {
    $jeton = $data['jeton'];

    $recupjeton = $bdd->prepare('SELECT id FROM jetons WHERE jeton = :jeton');
    $recupjeton->execute(array('jeton' => $jeton));

    if ($recupjeton->rowCount() > 0) {
        $deletejeton = $bdd->prepare('DELETE FROM jetons WHERE jeton = :jeton');
        $deletejeton->execute(array('jeton' => $jeton));

        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'error' => "Jeton inconnu."));
    }
} else {
    echo json_encode(array('success' => false, 'error' => "Aucun jeton fourni."));
}
?>
