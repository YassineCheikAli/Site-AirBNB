<?php
session_start();
$dsn = 'mysql:host=localhost:3306;dbname=continental_bd_test;charset=utf8';
$username = 'root';
$password = '';

try {
    $bdd = new PDO($dsn, $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch user profile data from the database
$query = "SELECT * FROM profil";
$stmt = $bdd->prepare($query);
$stmt->execute();
$profileData = $stmt->fetch(PDO::FETCH_ASSOC);

// Close the database connection
$bdd = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Profil</title>
  <meta name="description" content="PageProfil">
  <meta name="author" content="PageProfil">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive_g.css">
  <link rel="stylesheet" href="responsive_p.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="Images/image 1.png" alt="Logo">
    </div>
    <div class="brand">
      <h1>Maison des Galadrhim</h1>
    </div>
    <div class="profile">
      <img src="Images/Ellipse 34.png" alt="User Profile">
    </div>
  </header>

  <div class="box_profil">
    <div class="ligne_profil"></div>
    <!-- Bouton editer ici -->
    <a href="edition_profil.php" class="box_editer"><span class="editer_txt">Editer profil</span></a>
    <div class="profil_image"></div><span  class="profil_nom">Diego Moran</span><span  class="profil_compte">Guest</span>
  </div>

  <div class="historique">
    <span class="historique_titre">Historique</span>
    <span class="historique_txt">Historique des réservations et durée</span>
    <span class="date1">Paris, XII ème, 45 Rue Victor Hugo 6/7/2023 - 7/7/2023</span>
    <span class="date2">Paris, XII ème, 45 Rue Victor Hugo 6/7/2023 - 7/7/2023 </span>
    <span class="date3">Paris, XII ème, 45 Rue Victor Hugo 6/7/2023 - 7/7/2023</span>
    <span class="date4">Paris, XII ème, 45 Rue Victor Hugo 6/7/2023 - 7/7/2023</span>
    <button class="box_icon"></button>
  </div>

  <div class="about">
    <span class="about_titre">About me</span>
    <div class="about_txt"><?php echo $profileData['about_text']; ?></div>
  </div>

  <div class="perso">
    <span class="perso_titre">Infos personnelles</span>
    <div class="infos">
      <span class="telephone">Telephone:<?php echo $profileData['telephone']; ?></span>
      <span class="mail">Mail:<?php echo $profileData['mail']; ?></span>
      <span class="adresse">Adresse:<?php echo $profileData['adresse']; ?></span>
      <span class="nationalité">Nationalité:<?php echo $profileData['nationalite']; ?></span>
    </div>

    
    <div class="perso_icons2">
      <span class="perso_icon5"></span>
      <span class="perso_icon6"></span>
      <span class="perso_icon7"></span>
      <span class="perso_icon8"></span>
    </div>
  </div>

  <div class="boxcom">
    <div class="boxcom2">
      <span class="boxcom_nom">Léonardo DiCaprio</span>
      <div class="boxcom_im"></div>
      <span class="boxcom_txt">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since th
      and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley o</span>
      <span class="boxcom_adresse">Paris, XII ème, 45 Rue Victor Hugo</span>
      <span class="boxcom_com">Vos commentaires</span>
    </div>
  </div>

  <div class="ligne1"></div>
  <div class="ligne2"></div>
  <div class="ligne3"></div>

</body>

<footer>
  <div class="join">
    <h2>Nous sommes présents sur les réseaux sociaux.</h2>
    <div class="social">
      <img src="Images/Instagram.png" alt="insta" class="instagram">
      <img src="Images/Pinterest.png" alt="insta" class="pinterest">
      <img src="Images/Facebook.png" alt="insta" class="facebook">
    </div>
  </div>
</footer>
</html>
