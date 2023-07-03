<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "continental_bd_test";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['annulation'])) {
        $id = $_POST['reservation_id']; // Supposons que l'identifiant de la réservation est passé en tant que paramètre

        // Supprimer la réservation de la base de données
        $deleteQuery = "DELETE FROM reservation WHERE id = :id";
        $deleteStatement = $connexion->prepare($deleteQuery);
        $deleteStatement->bindParam(':id', $id);
        $deleteStatement->execute();

        // Redirection vers la page d'accueil
        header("Location: Menu_connect.php");
        exit();
    }

    // Exécuter votre code pour récupérer les données de la base de données

    // Par exemple, pour récupérer toutes les lignes de la table "reservation"
    $query = "SELECT * FROM reservation";
    $result = $connexion->query($query);
    
        

    

    foreach ($result as $row) {
        $_SESSION['id'] = $row['id'];

        echo "
        
        
        <style>.gestion
        {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 95%;
            height: 45%;
            border-bottom: #ABABAB solid 1px;
        }
        
        .main_content_gestion
        {
            display: flex;
            justify-content: space-between;
            width: 98%;
            height: 60%;
            background-color: #D9D9D9;
            border-radius: 25px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin-right: auto;
            margin-left: auto;
            align-items: center;
        }
        
        .titre_gestion
        {
            margin-left: 30px;
        }
        
        .titre_logement
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
        }
        
        .date_logement
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            color: #747070;
        }
        
        .detail_reservation
        {
            display: flex;
        }
        
        .photo_gestion_logement
        {
            width: 233px;
            height: 200px;
            border-radius: 15px;
            margin-left: 60px;
        }
        
        .information_reservation
        {
            
            height: 70%;
            margin-left: 60px;
        }
        
        .titre
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            margin-bottom: 20px;
        }
        
        .date
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            margin-bottom: 20px;
            color: #747070;
        }
        
        .statut
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            margin-bottom: 20px;
            color: #747070;
        }

        .titre_logement
        {
            margin-bottom: 10px;
        }
        
        .price
        {
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
        }
        
        .annulation
        {    
            background: #D82525;
            border-radius: 10px;
            border: none;
            width: 100%;
            height: 24%;
            font-family: 'Josefin Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 35px;
            color: white;
        }
        
        .droite
        {   
            width: 12%;
            height: 73%;
            margin-right: 60px;
            text-align: right;
            justify-content: flex-end;
        }
        </style> 


        <div class='gestion'>
            <div class='titre_gestion'>
                <p class='titre_logement'>Paris, XVII ème</p>
                
            </div>
            <div class='main_content_gestion'>
                <div class='detail_reservation'>
                    <img src='image/Fond.png' class='photo_gestion_logement'>
                    
                    <div class='information_reservation'>
                        <p class='titre'>réservation numéro".$row['id']."</p>
                        <p class='date'>" . $row['date_de_debut'] . " - " . $row['date_de_fin'] . "</p>
                        <p class='statut'>En attente</p>
                    </div>
                </div>
    
                <div class='droite'>
                    <p class='price'>1200 €</p>
                    <form action='annulation.php' method='post'>
                    <input class='annulation' type='submit' name='annulation' value='Annuler'>
                    </form>
                </div>
            </div>
        </div>";
    }

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_reservation.css  ">
	<title>Gestion de Réservation</title>
</head>

<body>
	<svg class="return" onclick="window.location.href = 'deconnexion.php';" width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
		<circle cx="18.1793" cy="17.8267" r="17.25" transform="rotate(178.94 18.1793 17.8267)" fill="#D9D9D9" stroke="black" stroke-width="0.5"/>
		<path d="M21.4349 24.509C21.6458 24.2901 21.7612 23.9963 21.7556 23.6924C21.75 23.3884 21.6239 23.0991 21.405 22.8881L15.6264 17.3184L21.1961 11.5398C21.4009 11.3198 21.5111 11.0281 21.503 10.7276C21.4949 10.4271 21.369 10.1418 21.1526 9.93318C20.9361 9.72456 20.6464 9.6093 20.3458 9.61222C20.0452 9.61514 19.7578 9.73601 19.5454 9.9488L13.1802 16.5528C12.9693 16.7717 12.8539 17.0654 12.8595 17.3694C12.8651 17.6733 12.9912 17.9626 13.2101 18.1736L19.814 24.5388C20.0329 24.7498 20.3267 24.8651 20.6306 24.8595C20.9346 24.8539 21.2239 24.7278 21.4349 24.509Z" fill="black"/>
	</svg>

</body>
</html>
