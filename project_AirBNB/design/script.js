$(document).ready(function() {
  // Initialiser les sélecteurs de date
  $("#date-entree").datepicker({
    minDate: 0,
    onSelect: function(selectedDate) {
      var minDate = new Date(selectedDate);
      minDate.setDate(minDate.getDate() + 1);
      $("#date-sortie").datepicker("option", "minDate", minDate);
    }
  });

  $("#date-sortie").datepicker({
    minDate: 1,
    onSelect: function(selectedDate) {
      var maxDate = new Date(selectedDate);
      maxDate.setDate(maxDate.getDate() - 1);
      $("#date-entree").datepicker("option", "maxDate", maxDate);
    }
  });

  // Gérer l'envoi du formulaire
  $("#reservation-form").submit(function(e) {
    e.preventDefault(); // Empêcher le comportement par défaut du formulaire
    
    // Récupérer les valeurs du formulaire
    var dateEntree = $("#date-entree").val();
    var dateSortie = $("#date-sortie").val();

    // Vérifier si les valeurs sont vides
    if (dateEntree !== '' && dateSortie !== '') {
      // Envoyer le formulaire
      $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        data: $(this).serialize(),
        success: function(response) {
          // Afficher le message de succès avec les dates réservées
          $("#reservation-message").text("Les informations de réservation ont été enregistrées avec succès. Dates réservées : " + response);

          // Cacher le bouton "Réservation"
          $("#reservation-btn").hide();

          // Afficher le bouton "Annuler"
          $("#annuler-btn").show();
        },
        error: function() {
          // Afficher le message d'erreur
          $("#reservation-message").text("Une erreur est survenue lors de l'enregistrement de la réservation.");
        }
      });
    } else {
      // Afficher le message d'erreur
      $("#reservation-message").text("Veuillez remplir toutes les informations de réservation.");
    }
  });

  // Gérer le clic sur le bouton "Annuler"
  $("#annuler-btn").click(function() {
    // Confirmer l'annulation de la réservation
    if (confirm("Êtes-vous sûr de vouloir annuler la réservation ?")) {
      // Envoyer le formulaire d'annulation
      $.ajax({
        url: "annulation.php",
        type: "POST",
        data: $("#reservation-form").serialize(),
        success: function(response) {
          // Réinitialiser le formulaire
          $("#reservation-form")[0].reset();

          // Cacher le bouton "Annuler"
          $("#annuler-btn").hide();

          // Afficher le bouton "Réservation"
          $("#reservation-btn").show();

          // Afficher le message de succès de l'annulation
          $("#reservation-message").text("La réservation a été annulée avec succès.");
        },
        error: function() {
          // Afficher le message d'erreur
          $("#reservation-message").text("Une erreur est survenue lors de l'annulation de la réservation.");
        }
      });
    }
  });
});

function toggleCheckbox() {
  var checkbox = document.getElementById("myCheckbox");
  if (checkbox.checked) {
    console.log("La case à cocher est cochée !");
  } else {
    console.log("La case à cocher n'est pas cochée !");
  }
}

const bouton = document.getElementById('monBouton');
const cadreTexte = document.getElementById('cadreTexte');

bouton.addEventListener('mouseover', function() {
    cadreTexte.style.display = 'block';
});

bouton.addEventListener('mouseout', function() {
cadreTexte.style.display = 'none';
});


