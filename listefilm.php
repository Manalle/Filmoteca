<?php 
session_start();
include("connexionbdd.php");
// Requête SQL pour récupérer les films
$sqlreq = "SELECT id, title, year, synopsis, director, created_at, deleted_at, genre FROM movie";
$resultat = $connexion->query($sqlreq);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Films</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:aliceblue;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        h2 {
            text-align: center;
            color: rgb(196, 196, 45);
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: grey;
        }
    </style>
</head>
<body>
    <h2>Listes des Films</h2>
    <!-- Tableau pour lister les films -->
    <table>
        <tr>
            <th>Titre</th>
            <th>Année</th>
            <th>Synopsis</th>
            <th>Réalisateur</th>
            <th>Genre</th>
        </tr>
        <!-- Films ici -->
        <?php
        if ($resultat->num_rows > 0) {
            while ($row = $resultat->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['title'] . "</td>
                        <td>" . $row['year'] . "</td>
                        <td>" . $row['synopsis'] . "</td>
                        <td>" . $row['director'] . "</td>
                        <td>" . $row['genre'] . "</td>
                      </tr>";
            }
        } 

        $connexion->close();
        ?>
    </table>
</body>
</html>


