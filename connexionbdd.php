<?php 
// connexion a ma bdd 
$nom_serveur = "localhost";
$nom_utilisateur = "root";
$mdp = "";
$base_de_donnes ="filmoteca";
$connexion = new mysqli ($nom_serveur,$nom_utilisateur,$mdp,$base_de_donnes);
?>