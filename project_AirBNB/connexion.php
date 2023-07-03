<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd_test;charset=utf8;', 'root', 'root');
$bdd1 = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['se_connecter'])) {
    if (!empty($_POST['mail']) AND !empty($_POST['mot_de_passe'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mot_de_passe = $_POST['mot_de_passe'];

        $data = array(
            'mail' => $mail,
            'mot_de_passe' => $mot_de_passe
        );

        $json = json_encode($data);
        $url = "http://localhost:8888/Project_Hetic_jim/Authentification/login.php";
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => $json
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result, true);

        if ($response['success']) {
            $_SESSION['mail'] = $response['mail'];
            $_SESSION['id'] = $response['id'];
            $_SESSION['jeton'] = $response['jeton'];
            
            // Récupérer id depuis la base de données
            $stmt = $bdd1->prepare("SELECT id FROM users WHERE mail = :mail");
            $stmt->execute(array('mail' => $response['mail']));
            $row = $stmt->fetch();

            // Enregistrer id en variable de session
            $_SESSION['id'] = $row['id'];

            
            header('Location: Menu_connect.php');
            exit();
        } else {
            echo $response['error'];
        }
    } else {
        echo "Veuillez compléter tous les champs...";
    }           
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hero">
        <img src="Photos/Paris.png" class="image">

        <div class="content">
            <div id="form-container">
                <h1>Connexion</h1>
                <form method="POST" class="Inscription_bloc" action="Menu_connect.php">
                    <table>
                        <tr>
                            <td><input class="input" type="email" name="mail" autocomplete="off" placeholder="Votre Adresse mail "></td>
                        </tr> 
                        <tr>
                            <td><input class="input" type="password" name="mot_de_passe" autocomplete="off" placeholder="Votre Mot de Passe "></td>
                        </tr>
                    </table>      
                    <button type="submit" name="se_connecter">Se connecter</button>      
                </form>
            </div> 
        </div>
    </section>       
</body>
</html>


