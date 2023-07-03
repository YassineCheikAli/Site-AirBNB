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

// Handle the form submission
if (isset($_POST['submit'])) {
    // Retrieve form data and sanitize
    $telephone = $_POST["telephone"];
    $mail = $_POST["mail"];
    $adresse = $_POST["adresse"];
    $nationalite = $_POST["nationalite"];
    $about_text = $_POST["about_text"];

    $query = "INSERT INTO profil (telephone, mail, adresse, nationalite, about_text) VALUES (?, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($query);
    $stmt->execute([$telephone, $mail, $adresse, $nationalite, $about_text]);

    // Redirect to another page after data insertion
    header("Location: profil.php");
    exit;
}

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
    <button class="box_editer"><span class="editer_txt">Editer profil</span></button>
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
    <form action="" method="POST">
      <textarea class="about_txt" name="about_text">Donec ipsum sapien, consectetur in porttitor sit amet, placerat eget mi. Duis interdum ipsum elit. Cras sodales elit id porta lobortis. Donec ipsum sapien, consectetur in porttitor sit amet, placerat eget mi. Duis interdum ipsum elit. Cras sodales elit id porta lobortis. Donec ipsum sapien, consectetur in porttitor sit amet, placerat eget mi. Duis interdum ipsum elit. Cras sodales elit id porta lobortis.</textarea>


  </div>

  <div class="perso">
    <span class="perso_titre">Infos personnelles</span>
    <form action="" method="POST">
      <input type="text" name="telephone" placeholder="  telephone" class="perso_l1" >
      <input type="email" name="mail" placeholder="  Mail" class="perso_l2" >
      <input type="text" name="adresse" placeholder="  Adresse" class="perso_l3" >
      <input type="text" name="nationalite" placeholder="  Nationalité" class="perso_l4" >

    <div class="infos">
      <span class="telephone">Telephone</span>
      <span class="mail">Mail</span>
      <span class="adresse">Adresse</span>
      <span class="nationalité">Nationalité</span>

      <div class="perso_icons">
        <span class="perso_icon1"></span>
        <span class="perso_icon2"></span>
        <span class="perso_icon3"></span>
        <span class="perso_icon4"></span>
      </div>
    </div>
  </div>

  <button type="submit"  name="submit" class="enregistrer-button">
    <span class="enregistrer_txt">Enregistrer</span> 
  </button>
</form>

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
