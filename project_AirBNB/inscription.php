<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd_test;charset=utf8;', 'root', 'root');
$bdd1 = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['envoi'])) {
    if (!empty($_POST['mail']) AND !empty($_POST['mot_de_passe'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mot_de_passe = sha1($_POST['mot_de_passe']);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);

        $data = array(
            'mail' => $mail,
            'mot_de_passe' => $mot_de_passe,
        );
        //var_dump($data);

        $json = json_encode($data);
        $url = "http://localhost:8888/Project_Hetic_jim/Authentification/register.php";
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
            $id = $response['id'];

            // Insérer l'utilisateur dans la table "users"
            $insertUser = $bdd->prepare('INSERT INTO utilisateur(id, mail, nom, prenom) VALUES(:id, :mail, :nom, :prenom)');
            $insertUser->execute(array(
                'id' => $id,
                'mail' => $mail,
                'nom' => $nom,
                'prenom' => $prenom,
            ));

            $_SESSION['mail'] = $mail;
            $_SESSION['id'] = $bdd->lastInsertId();
            $_SESSION['id'] = $id;
            header('Location: connexion.php');
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
    <title>Inscription</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="hero">
        <img src="Photos/Paris.png" class="image">

        <div class="content">
            <div id="form-container">
                <h1>Inscription</h1>
                <form method="POST" class="Inscription_bloc" action="">
                    <table>
                        <tr>
                            <td><input class="input" type="email" name="mail" autocomplete="off" placeholder="Votre Adresse mail "></td>
                        </tr>
                        <tr>
                            <td><input class="input" type="text" name="nom" autocomplete="off" placeholder="Votre nom "></td>
                        </tr>   
                        <tr>
                            <td><input class="input" type="text" name="prenom" autocomplete="off" placeholder="Votre Prénom "></td>
                        </tr>   
                        <tr>
                            <td><input class="input" type="password" name="mot_de_passe" autocomplete="off" placeholder="Votre Mot de Passe "></td>
                        </tr>
                    </table>      
                    <button type="submit" name="envoi">Envoyer</button>      
                </form>
            </div> 
        </div>
    </section>       
</body>
</html>


