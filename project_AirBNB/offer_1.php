<?php

session_start();
$bdd = new PDO('mysql:host=localhost:8889;dbname=continental_bd_test;charset=utf8;', 'root', 'root');
$bdd1 = new PDO('mysql:host=localhost:8889;dbname=continental_bd2_test;charset=utf8;', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="design/offer.css">
	<title>Offre</title>
</head>
<body>
    
</body>
    <div class="Offre">
        <img src="Photos/offer.png" alt="maison" class="maison">
        <div class="contenu">
            <h1>Paris, Xème</h4>
            <p class="price">700€ /nuit</p>
            <div class="detail">
                <svg class="bed" width="34" height="22" viewBox="0 0 34 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.66667 0C2.07489 5.38509e-05 2.46889 0.149927 2.77395 0.421192C3.07901 0.692457 3.2739 1.06625 3.32167 1.47167L3.33333 1.66667V11.6667H13.3333V3.33333C13.3334 2.92511 13.4833 2.5311 13.7545 2.22605C14.0258 1.92099 14.3996 1.7261 14.805 1.67833L15 1.66667H28.3333C29.6087 1.6666 30.8359 2.15388 31.7638 3.02881C32.6917 3.90374 33.2502 5.10018 33.325 6.37333L33.3333 6.66667V20C33.3329 20.4248 33.1702 20.8334 32.8786 21.1423C32.587 21.4512 32.1884 21.6371 31.7643 21.662C31.3403 21.6868 30.9227 21.5489 30.5969 21.2762C30.2712 21.0036 30.0618 20.6168 30.0117 20.195L30 20V15H3.33333V20C3.33286 20.4248 3.1702 20.8334 2.87859 21.1423C2.58697 21.4512 2.18841 21.6371 1.76434 21.662C1.34027 21.6868 0.922701 21.5489 0.596946 21.2762C0.27119 21.0036 0.0618393 20.6168 0.0116666 20.195L0 20V1.66667C0 1.22464 0.175595 0.800716 0.488155 0.488156C0.800716 0.175595 1.22464 0 1.66667 0Z" fill="#989798"/>
                    <path d="M8.33333 3.33334C8.98191 3.33354 9.61633 3.52295 10.1589 3.87835C10.7014 4.23376 11.1285 4.73971 11.3877 5.33421C11.647 5.92872 11.7272 6.58594 11.6185 7.22534C11.5098 7.86474 11.2169 8.45854 10.7757 8.93397C10.3346 9.4094 9.76431 9.7458 9.13482 9.90195C8.50532 10.0581 7.84394 10.0272 7.23174 9.81308C6.61953 9.59895 6.0831 9.21087 5.68817 8.69639C5.29324 8.18192 5.05698 7.56342 5.00833 6.91667L5 6.66667L5.00833 6.41667C5.07141 5.57808 5.44912 4.79431 6.06575 4.2225C6.68239 3.65068 7.49237 3.33307 8.33333 3.33334Z" fill="#989798"/>
                </svg>
    
                <p>5</p>
                <div class="ligne-verticale"></div>
    
                <svg class="shower" width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 11.3333H3.16667M3.16667 11.3333H21.8333M3.16667 11.3333V13.6667C3.16667 14.9943 3.84683 17.456 6.36917 18.1478M21.8333 11.3333C22.1428 11.3333 22.4395 11.2104 22.6583 10.9916C22.8771 10.7728 23 10.4761 23 10.1667V5.5C23 4.33333 22.3 2 19.5 2C16.7 2 16 4.33333 16 5.5M21.8333 11.3333V13.6667C21.8333 14.9943 21.1532 17.456 18.6308 18.1478M16 5.5H13.6667M16 5.5H18.3333M18.6308 18.1478C18.1533 18.2752 17.6608 18.3376 17.1667 18.3333H7.83333C7.28733 18.3333 6.80083 18.2668 6.36917 18.1478M18.6308 18.1478L19.5 20.6667M6.36917 18.1478L5.5 20.6667" stroke="#363537" stroke-opacity="0.5" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
    
                <p>5</p>
                <div class="ligne-verticale"></div>
    
                <svg class="person" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.835 10.835C9.34519 10.835 8.06982 10.3045 7.00889 9.24361C5.94796 8.18268 5.4175 6.90731 5.4175 5.4175C5.4175 3.92769 5.94796 2.65232 7.00889 1.59139C8.06982 0.530464 9.34519 0 10.835 0C12.3248 0 13.6002 0.530464 14.6611 1.59139C15.722 2.65232 16.2525 3.92769 16.2525 5.4175C16.2525 6.90731 15.722 8.18268 14.6611 9.24361C13.6002 10.3045 12.3248 10.835 10.835 10.835ZM0 21.67V17.8778C0 17.1103 0.197739 16.4046 0.593217 15.7609C0.988694 15.1171 1.51329 14.6263 2.167 14.2887C3.56652 13.5889 4.98862 13.0639 6.43328 12.7135C7.87795 12.3632 9.34519 12.1885 10.835 12.1894C12.3248 12.1894 13.7921 12.3645 15.2367 12.7149C16.6814 13.0652 18.1035 13.5898 19.503 14.2887C20.1576 14.6273 20.6827 15.1184 21.0781 15.7622C21.4736 16.406 21.6709 17.1112 21.67 17.8778V21.67H0Z" fill="#989798"/>
                </svg>
                <p>10</p>
            </div>
            <div class="content">
                <p>     
                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley oand typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley o <br> <br>
        
                    and typesetting industry. Lorem 
                </p>
            </div>

            <form class="navbar"  action="reservation.php" id="reservation-form" method="post">
                <input class="custom-input" type="text" id="date-entree" name="date_entree" placeholder="Date entrée">
                <input class="custom-input" type="text" id="date-sortie" name="date_sortie" placeholder="Date sortie">
            

              <button class="check" type="submit" onclick="window.location.href = 'validation.html';">Réserver</button>
            </form>
        </div>
        
    </div>

    <!-- Service -->
    
    <div class="title">
        <hr class="horizontal-line">
        <hr class="horizontal-line_2">
        <h2>SERVICES</h2>
    </div>

    <div class="service_container">
      <div class="service_1">
        <div class="car">
          <svg class="car_serv" width="30" height="27" viewBox="0 0 30 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.33333 10.3333L5.83333 2.83334H24.1667L26.6667 10.3333M24.1667 18.6667C23.5036 18.6667 22.8677 18.4033 22.3989 17.9344C21.9301 17.4656 21.6667 16.8297 21.6667 16.1667C21.6667 15.5036 21.9301 14.8678 22.3989 14.3989C22.8677 13.9301 23.5036 13.6667 24.1667 13.6667C24.8297 13.6667 25.4656 13.9301 25.9344 14.3989C26.4033 14.8678 26.6667 15.5036 26.6667 16.1667C26.6667 16.8297 26.4033 17.4656 25.9344 17.9344C25.4656 18.4033 24.8297 18.6667 24.1667 18.6667ZM5.83333 18.6667C5.17029 18.6667 4.53441 18.4033 4.06557 17.9344C3.59673 17.4656 3.33333 16.8297 3.33333 16.1667C3.33333 15.5036 3.59673 14.8678 4.06557 14.3989C4.53441 13.9301 5.17029 13.6667 5.83333 13.6667C6.49637 13.6667 7.13226 13.9301 7.6011 14.3989C8.06994 14.8678 8.33333 15.5036 8.33333 16.1667C8.33333 16.8297 8.06994 17.4656 7.6011 17.9344C7.13226 18.4033 6.49637 18.6667 5.83333 18.6667ZM26.5333 2.00001C26.2 1.03334 25.2667 0.333344 24.1667 0.333344H5.83333C4.73333 0.333344 3.8 1.03334 3.46667 2.00001L0 12V25.3333C0 25.7754 0.175595 26.1993 0.488155 26.5119C0.800716 26.8244 1.22464 27 1.66667 27H3.33333C3.77536 27 4.19928 26.8244 4.51184 26.5119C4.8244 26.1993 5 25.7754 5 25.3333V23.6667H25V25.3333C25 25.7754 25.1756 26.1993 25.4882 26.5119C25.8007 26.8244 26.2246 27 26.6667 27H28.3333C28.7754 27 29.1993 26.8244 29.5118 26.5119C29.8244 26.1993 30 25.7754 30 25.3333V12L26.5333 2.00001Z" fill="black"/>
          </svg>
          <p>Réception aéroport + prise en charge des bagages</p>
          <input type="checkbox" id="myCheckbox" onchange="toggleCheckbox()">
        </div>
    
        <div class="cuisine">
          <svg class="chef" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.8086 6.37661C20.7868 6.37661 24.6021 8.2443 27.4152 11.5688C30.2282 14.8933 31.8086 19.4023 31.8086 24.1039C31.8086 24.8272 31.5655 25.5209 31.1327 26.0324C30.6999 26.5438 30.1129 26.8312 29.5009 26.8312H4.11629C3.50425 26.8312 2.91728 26.5438 2.4845 26.0324C2.05172 25.5209 1.80859 24.8272 1.80859 24.1039C1.80859 19.4023 3.38895 14.8933 6.20199 11.5688C9.01504 8.2443 12.8303 6.37661 16.8086 6.37661ZM16.8086 6.37661V2.28571M1.80859 32.2857H31.8086" stroke="black" stroke-width="2.85714" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <p>Chef cuisinier personnel</p>
          <input type="checkbox" id="myCheckbox" onchange="toggleCheckbox()">
        </div>
    
        <div class="package">
          <svg class="box" width="34" height="36" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.95 8.33594L18.2 0.812497C17.8326 0.609501 17.4197 0.503021 17 0.503021C16.5803 0.503021 16.1674 0.609501 15.8 0.812497L2.05 8.33906C1.65733 8.55391 1.32954 8.87025 1.10086 9.25504C0.872188 9.63983 0.751016 10.079 0.75 10.5266V25.4703C0.751016 25.9179 0.872188 26.357 1.10086 26.7418C1.32954 27.1266 1.65733 27.443 2.05 27.6578L15.8 35.1844C16.1674 35.3874 16.5803 35.4938 17 35.4938C17.4197 35.4938 17.8326 35.3874 18.2 35.1844L31.95 27.6578C32.3427 27.443 32.6705 27.1266 32.8991 26.7418C33.1278 26.357 33.249 25.9179 33.25 25.4703V10.5281C33.2498 10.0797 33.129 9.63961 32.9003 9.25393C32.6716 8.86824 32.3434 8.55117 31.95 8.33594ZM17 3L29.5531 9.875L24.9016 12.4219L12.3469 5.54687L17 3ZM17 16.75L4.44687 9.875L9.74375 6.975L22.2969 13.85L17 16.75ZM3.25 12.0625L15.75 18.9031V32.3078L3.25 25.4719V12.0625ZM30.75 25.4656L18.25 32.3078V18.9094L23.25 16.1734V21.75C23.25 22.0815 23.3817 22.3995 23.6161 22.6339C23.8505 22.8683 24.1685 23 24.5 23C24.8315 23 25.1495 22.8683 25.3839 22.6339C25.6183 22.3995 25.75 22.0815 25.75 21.75V14.8047L30.75 12.0625V25.4641V25.4656Z" fill="black"/>
          </svg>
          <p>Package personnalisé lors de l'arrivée</p>
          <input type="checkbox" id="myCheckbox" onchange="toggleCheckbox()">
        </div>
      </div>

      <div class="service_2">
        <div class="securite">
          <svg class="secu" width="31" height="38" viewBox="0 0 31 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.3799 19H27.0465C26.1632 25.85 21.5799 31.9667 15.3799 33.8667V19H3.71322V9.49999L15.3799 4.31666M15.3799 0.666656L0.379883 7.33332V17.3333C0.379883 26.5833 6.77988 35.2167 15.3799 37.3333C23.9799 35.2167 30.3799 26.5833 30.3799 17.3333V7.33332L15.3799 0.666656Z" fill="black"/>
          </svg>
          <p>Résidence sécurisé</p>
        </div>
      

        <div class="maint">
          <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0469 7.33334C15.0469 4.16668 13.0469 1.33334 10.0469 0.333344V6.50001H5.04687V0.333344C2.04687 1.33334 0.046875 4.16668 0.046875 7.33334C0.046875 10.5 2.04687 13.3333 5.04687 14.3333V32.6667C5.04687 33.3333 5.38021 33.6667 5.88021 33.6667H9.21354C9.71354 33.6667 10.0469 33.3333 10.0469 32.8333V14.5C13.0469 13.5 15.0469 10.6667 15.0469 7.33334ZM25.0469 10.3333C18.5469 10.5 13.3802 15.6667 13.3802 22C13.3802 28.5 18.5469 33.6667 25.0469 33.6667C31.5469 33.6667 36.7135 28.5 36.7135 22C36.7135 15.5 31.5469 10.3333 25.0469 10.3333ZM25.0469 30.3333C20.3802 30.3333 16.7135 26.6667 16.7135 22C16.7135 17.3333 20.3802 13.6667 25.0469 13.6667C29.7135 13.6667 33.3802 17.3333 33.3802 22C33.3802 26.6667 29.7135 30.3333 25.0469 30.3333ZM23.3802 15.3333V23.6667L29.3802 27.3333L30.7135 25.3333L25.8802 22.5V15.3333H23.3802Z" fill="black"/>
          </svg>
          <p>Résidence sécurisé</p>
        </div>

        <!-- Bouton -->
        <div class="assistance">

          <div class="bouton" id="monBouton">i</div>
          <div id="cadreTexte">
              <p> L'équipe de l'entreprise peut fournir une aide personnalisée aux clients pour organiser leur emploi du temps, réserver des restaurants, des billets pour des événements spéciaux, des visites guidées, etc.</p>
          </div>
          
          <svg width="32" height="39" viewBox="0 0 32 39" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.5152 2.23874C24.4646 2.23874 30.0346 7.96686 30.0346 14.9162C30.0346 17.6606 29.5034 19.425 27.9127 21.6537C25.8046 24.5837 23.7752 26.3212 23.7752 29.9281V32.6869C23.7752 36.1081 20.8309 38.7344 17.4102 38.7344C13.9484 38.7344 11.0446 35.99 11.0446 32.5281C11.0446 31.7056 11.654 30.9887 12.4771 30.9887C13.7234 30.9887 13.6702 32.5937 14.1215 33.7481C14.6784 35.1537 15.8315 35.9756 17.3571 35.9756C19.3065 35.9756 21.0171 34.5306 21.0171 32.5806V29.5037C21.0171 23.2837 27.3827 21.0831 27.3827 14.8631C27.3827 9.35936 22.9127 4.89061 17.4096 4.89061C14.0009 4.89061 11.6009 6.00436 9.55773 8.70999C8.35086 10.315 7.80711 11.495 7.54211 13.4837C7.38274 14.7169 7.35773 16.3487 6.11023 16.3487C5.28773 16.3487 4.67773 15.6325 4.67773 14.81C4.67711 7.80874 10.5127 2.23874 17.5152 2.23874Z" fill="black"/>
            <path d="M17.1429 6.0575C22.0766 6.0575 26.3198 9.82437 26.3198 14.7575C26.3198 15.3937 25.8954 16.03 25.2591 16.03C24.5691 16.03 24.4104 15.2212 24.3041 14.545C24.0654 13.06 23.9454 12.105 23.1366 10.8325C21.811 8.75 19.8885 8.07375 17.4085 8.07375C15.061 8.07375 13.3904 8.85624 11.9973 10.7256C11.241 11.7344 10.7691 13.0825 10.531 14.3294C10.3454 15.3506 10.5529 16.1369 9.50539 16.1369C8.85539 16.1369 8.49727 15.4606 8.49727 14.81C8.49852 10.0094 12.3441 6.0575 17.1441 6.0575H17.1429ZM1.96852 25.6312L6.55914 30.2219L5.41289 31.3681L0.822266 26.7775L1.96852 25.6312ZM4.27789 23.3225L8.86914 27.9137L7.72227 29.0606L3.13102 24.4694L4.27789 23.3225ZM6.66477 20.9062L11.2554 25.4981L10.1091 26.6444L5.51852 22.0525L6.66539 20.9062H6.66477ZM9.43789 18.2112L14.0285 22.8031L12.8816 23.9494L8.29102 19.3575L9.43789 18.2112Z" fill="black"/>
            <path d="M12.0095 15.7869L16.6002 20.3775L15.4539 21.5237L10.8633 16.9331L12.0095 15.7869ZM14.6227 12.9294L19.2133 17.5212L18.0664 18.6675L13.4758 14.0756L14.6227 12.9294ZM27.537 2.80874L29.4008 4.67249L28.1964 5.87687L26.3327 4.01312L27.537 2.80874ZM29.9608 0.368744L31.8239 2.23249L30.6189 3.43687L28.7558 1.57312L29.9608 0.368744Z" fill="black"/>
          </svg>
          <p>Assistance personnalisé</p>
        </div>
      </div>
    </div>



  

    <!-- fin service -->

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
            <h3>Opera Garnier</h3>
            <p class="Description">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>    
        </div>
        <div class="item">
            <img src="Photos/Louvre.png">
            <h3>Musée du Louvre</h3>
            <p class="Description">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>       
        </div>

        <div class="item">
            <img src="Photos/Avenue.png">
            <h3>L'Avenue</h3>
            <p class="Description">and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>        
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="design/script.js"></script>
</body>
</html>