<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "continental_bd_test";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exécuter votre code pour récupérer les données de la base de données

    // Par exemple, pour récupérer toutes les lignes de la table "utilisateurs"
    $query = "SELECT * FROM utilisateur";
    $result = $connexion->query($query);

    // Afficher les données dans le tableau HTML
    echo "<table>";
    echo "<tr>";
    echo "<td class='header-cell-name'>Nom</td>";
    echo "<td class='header-cell-info'>prenom</td>";
    echo "<td class='header-cell-role'>Rôle</td>";
    echo "<th></th>";
    echo "</tr>";

    foreach ($result as $row) {
        echo "<tr id='row-" . $row['id'] . "'>";
        echo "<td class='cell'>" . $row['nom'] . "</td>";
        echo "<td class='cell'>" . $row['prenom'] . "</td>";
        echo "<td class='cell'>" . $row['role'] . "</td>";
        echo "<td class='svgContainer'>";
        echo "<svg class='svg-info' width='35' height='35' viewBox='0 0 35 35' fill='none' xmlns='http://www.w3.org/2000/svg'>";
        echo "<!-- Votre code SVG pour afficher les informations -->";
        echo "</svg>";
        echo "<svg class='svg-delete' onclick='deleteData(" . $row['id'] . ")' width='35' height='35' viewBox='0 0 35 35' fill='none' xmlns='http://www.w3.org/2000/svg'>";
        echo "<circle cx='17.5' cy='17.5' r='16.5' fill='#CA2222' fill-opacity='0.45' stroke='#CA2222' stroke-width='2'/>";
        echo "<path d='M24.6654 13.7584L22.2404 11.3334L17.9987 15.575L13.757 11.3334L11.332 13.7584L15.5737 18L11.332 22.2417L13.757 24.6667L17.9987 20.425L22.2404 24.6667L24.6654 22.2417L20.4237 18L24.6654 13.7584Z' fill='#CA2222'/>";
        echo "</svg>";
        echo "</td>";
        echo "</tr>";
    }
    

    echo "</table>";

} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>

<!-- Placer le code JavaScript ici -->
<!-- <script>
    function deleteData(id) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cette entrée ?')) {
            // Envoi de la requête AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Suppression de la ligne du tableau
                    var row = document.getElementById('row-' + id);
                    if (row) {
                        row.parentNode.removeChild(row);
                    }
                }
            };
            xhr.send('id=' + id);
        }
    }
</script> -->
