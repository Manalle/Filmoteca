<?php
// Connexion à la base de données avec mysqli

$nom_serveur = "127.0.0.1";  
$nom_utilisateur = "root";
$mdp = "";
$base_de_donnes = "filmoteca";

//connexion
$connexion = new mysqli($nom_serveur, $nom_utilisateur, $mdp, $base_de_donnes);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Erreur de connexion : " . $connexion->connect_error);
} else {
    echo "Connexion réussie à la base de données !";
}
?>
