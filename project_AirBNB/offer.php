<?php
session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd;charset=utf8;', 'root', 'root');
$bdd1 = new PDO('mysql:host=localhost:8889;dbname=continental_bd2;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="offer.css">
    <title>Offre</title>
</head>
<body>

<?php
// Variables pour stocker les informations modifiables
$titre = "Paris, Xème";
$prix = "700€ /nuit";
$nbLits = 5;
$nbDouches = 5;
$nbPersonnes = 10;
$description = "and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley oand typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley o";
$dateEntree = "";
$dateSortie = "";
?>

<div class="Offre">
    <img src="Photos/offer.png" alt="maison" class="maison">
    <div class="contenu">
        <h1 contenteditable="true"><?php echo $titre; ?></h1>
        <p class="price" contenteditable="true"><?php echo $prix; ?></p>
        <div class="detail">
            <svg class="bed" width="34" height="22" viewBox="0 0 34 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.66667 0C2.07489 5.38509e-05 2.46889 0.149927 2.77395 0.421192C3.07901 0.692457 3.2739 1.06625 3.32167 1.47167L3.33333 1.66667V11.6667H13.3333V3.33333C13.3334 2.92511 13.4833 2.5311 13.7545 2.22605C14.0258 1.92099 14.3996 1.7261 14.805 1.67833L15 1.66667H28.3333C29.6087 1.6666 30.8359 2.15388 31.7638 3.02881C32.6917 3.90374 33.2502 5.10018 33.325 6.37333L33.3333 6.66667V20C33.3329 20.4248 33.1702 20.8334 32.8786 21.1423C32.587 21.4512 32.1884 21.6371 31.7643 21.662C31.3403 21.6868 30.9227 21.5489 30.5969 21.2762C30.2712 21.0036 30.0618 20.6168 30.0117 20.195L30 20V15H3.33333V20C3.33286 20.4248 3.1702 20.8334 2.87859 21.1423C2.58697 21.4512 2.18841 21.6371 1.76434 21.662C1.34027 21.6868 0.922701 21.5489 0.596946 21.2762C0.27119 21.0036 0.0618393 20.6168 0.0116666 20.195L0 20V1.66667C0 1.22464 0.175595 0.800716 0.488155 0.488156C0.800716 0.175595 1.22464 0 1.66667 0Z" fill="#989798"/>
                <path d="M8.33333 3.33334C8.98191 3.33354 9.61633 3.52295 10.1589 3.87835C10.7014 4.23376 11.1285 4.73971 11.3877 5.33421C11.647 5.92872 11.7272 6.58594 11.6185 7.22534C11.5098 7.86474 11.2169 8.45854 10.7757 8.93397C10.3346 9.4094 9.76431 9.7458 9.13482 9.90195C8.50532 10.0581 7.84394 10.0272 7.23174 9.81308C6.61953 9.59895 6.0831 9.21087 5.68817 8.69639C5.29324 8.18192 5.05698 7.56342 5.00833 6.91667L5 6.66667L5.00833 6.41667C5.07141 5.57808 5.44912 4.79431 6.06575 4.2225C6.68239 3.65068 7.49237 3.33307 8.33333 3.33334Z" fill="#989798"/>
            </svg>

            <p contenteditable="true"><?php echo $nbLits; ?></p>
            <div class="ligne-verticale"></div>

            <svg class="shower" width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 11.3333H3.16667M3.16667 11.3333H21.8333M3.16667 11.3333V13.6667C3.16667 14.9943 3.84683 17.456 6.36917 18.1478M21.8333 11.3333C22.1428 11.3333 22.4395 11.2104 22.6583 10.9916C22.8771 10.7728 23 10.4761 23 10.1667V5.5C23 4.33333 22.3 2 19.5 2C16.7 2 16 4.33333 16 5.5M21.8333 11.3333V13.6667C21.8333 14.9943 21.1532 17.456 18.6308 18.1478M16 5.5H13.6667M16 5.5H18.3333M18.6308 18.1478C18.1533 18.2752 17.6608 18.3376 17.1667 18.3333H7.83333C7.28733 18.3333 6.80083 18.2668 6.36917 18.1478M18.6308 18.1478L19.5 20.6667M6.36917 18.1478L5.5 20.6667" stroke="#363537" stroke-opacity="0.5" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            <p contenteditable="true"><?php echo $nbDouches; ?></p>
            <div class="ligne-verticale"></div>

            <svg class="person" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.835 10.835C9.34519 10.835 8.06982 10.3045 7.00889 9.24361C5.94796 8.18268 5.4175 6.90731 5.4175 5.4175C5.4175 3.92769 5.94796 2.65232 7.00889 1.59139C8.06982 0.530464 9.34519 0 10.835 0C12.3248 0 13.6002 0.530464 14.6611 1.59139C15.722 2.65232 16.2525 3.92769 16.2525 5.4175C16.2525 6.90731 15.722 8.18268 14.6611 9.24361C13.6002 10.3045 12.3248 10.835 10.835 10.835ZM0 21.67V17.8778C0 17.1103 0.197739 16.4046 0.593217 15.7609C0.988694 15.1171 1.51329 14.6263 2.167 14.2887C3.56652 13.5889 4.98862 13.0639 6.43328 12.7135C7.87795 12.3632 9.34519 12.1885 10.835 12.1894C12.3248 12.1894 13.7921 12.3645 15.2367 12.7149C16.6814 13.0652 18.1035 13.5898 19.503 14.2887C20.1576 14.6273 20.6827 15.1184 21.0781 15.7622C21.4736 16.406 21.6709 17.1112 21.67 17.8778V21.67H0Z" fill="#989798"/>
            </svg>

            <p contenteditable="true"><?php echo $nbPersonnes; ?></p>
        </div>
        <div class="content">
            <p contenteditable="true"><?php echo $description; ?></p>
        </div>

        <form class="navbar" action="reservation.php" id="reservation-form" method="post">
            <input class="custom-input" type="text" id="date-entree" name="date_entree" placeholder="Date entrée" value="<?php echo $dateEntree; ?>">
            <input class="custom-input" type="text" id="date-sortie" name="date_sortie" placeholder="Date sortie" value="<?php echo $dateSortie; ?>">
        </form>

        <button class="check" type="submit">Réserver</button>
    </div>
</div>

<div class="title">
    <hr class="horizontal-line">
    <hr class="horizontal-line_2">
    <h2>SERVICES</h2>
</div>

<div class="Content">
    <div class="shop">
        <img src="Icon/Shop.svg" class="shopping">
        <input type="text" class="boutique" value="Boutique de luxe à proximité" contenteditable="true">
    </div>
    <div class="internet">
        <img src="Icon/Fibre.svg" class="Fibre">
        <input type="text" class="Fibre-optique" value="Fibre Optique" contenteditable="true">
    </div>
    <div class="culture">
        <img src="Icon/Musée.svg" class="Musée">
        <input type="text" class="Lieux" value="Lieux Culturel à proximité" contenteditable="true">
    </div>
    <div class="cuisine">
        <img src="Icon/Cuisine.svg" class="Cook">
        <input type="text" class="Cook-text" value="Cuisine équipée" contenteditable="true">
    </div>

    <div class="Extincteur">
        <img src="Icon/Extinct.svg" class="Extinct">
        <input type="text" class="Feu" value="Extincteur" contenteditable="true">
    </div>

    <div class="TV">
        <img src="Icon/TV.svg" class="écran">
        <input type="text" class="hd" value="TV 4K 75” avec abonnement standard au câble, Netflix, Chromecast" contenteditable="true">
    </div>

    <div class="Voiture">
        <img src="Icon/Car.svg" class="Car">
        <input type="text" class="Chauffeur" value="Chauffeur privée" contenteditable="true">
    </div>

    <div class="Surveillance">
        <img src="Icon/Camera.svg" class="Caméra">
        <input type="text" class="Rec" value="Système de surveillance vidéo 24/24" contenteditable="true">
    </div>
</div>

<div class="title">
    <hr class="horizontal-line">
    <hr class="horizontal-line_2">
    <h2>LOCALISATION</h2>
</div>

<div class="Location">
    <img src="Photos/Location.png" class="Localisation">
</div>

<div class="title">
    <hr class="horizontal-line">
    <hr class="horizontal-line_2">
    <h2>PROXIMITÉ</h2>
</div>

<div class="galerie">
    <div class="item">
        <img src="Photos/Opera.png">
        <h3 contenteditable="true">Opera Garnier</h3>
        <p class="Description" contenteditable="true">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
    </div>
    <div class="item">
        <img src="Photos/Louvre.png">
        <h3 contenteditable="true">Musée du Louvre</h3>
        <p class="Description" contenteditable="true">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
    </div>

    <div class="item">
        <img src="Photos/Avenue.png">
        <h3 contenteditable="true">L'Avenue</h3>
        <p class="Description" contenteditable="true">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    // Gérer la modification des données
    $("h1[contenteditable], .price[contenteditable], .detail p[contenteditable], .custom-input").on("input", function() {
      // Récupérer les valeurs modifiées
      var titre = $("h1[contenteditable]").text();
      var prix = $(".price[contenteditable]").text();
      var nbLits = parseInt($(".detail p:nth-child(2)").text());
      var nbDouches = parseInt($(".detail p:nth-child(4)").text());
      var nbPersonnes = parseInt($(".detail p:nth-child(6)").text());
      var description = $(".content p[contenteditable]").text();
      var dateEntree = $("#date-entree").val();
      var dateSortie = $("#date-sortie").val();

      // Créer un objet FormData pour envoyer les données
      var formData = new FormData();
      formData.append("titre", titre);
      formData.append("prix", prix);
      formData.append("nbLits", nbLits);
      formData.append("nbDouches", nbDouches);
      formData.append("nbPersonnes", nbPersonnes);
      formData.append("description", description);
      formData.append("dateEntree", dateEntree);
      formData.append("dateSortie", dateSortie);

      // Envoyer les données via AJAX
      $.ajax({
        url: "enregistrer.php", // Remplacez "enregistrer.php" par le chemin vers votre fichier "enregistrer.php"
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          console.log("Données enregistrées avec succès");
        },
        error: function() {
          console.error("Une erreur est survenue lors de l'enregistrement des données");
        }
      });
    });

    // Gérer l'envoi du formulaire de réservation
    $("#reservation-form").submit(function(e) {
      e.preventDefault(); // Empêcher le comportement par défaut du formulaire

      // Récupérer les valeurs du formulaire
      var dateEntree = $("#date-entree").val();
      var dateSortie = $("#date-sortie").val();

      // Créer un objet FormData pour envoyer les données
      var formData = new FormData(this);
      formData.append("dateEntree", dateEntree);
      formData.append("dateSortie", dateSortie);

      // Envoyer les données via AJAX
      $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          console.log("Données de réservation enregistrées avec succès");
        },
        error: function() {
          console.error("Une erreur est survenue lors de l'enregistrement des données de réservation");
        }
      });
    });
  });
</script>



</body>
</html>
