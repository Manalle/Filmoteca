<?php

declare(strict_types=1); 

require __DIR__ . '/../vendor/autoload.php'; 

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use App\Core\Router;


$host = 'filmoteca_db';  
$dbname = 'filmoteca';   
$user = 'filmoteca_user'; 
$password = 'filmoteca_password'; 

try {
    // Connexion à la base de données avec les paramètres adaptés
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gérer les erreurs de manière plus propre
} catch (PDOException $e) {
    // Gérer l'erreur de connexion
    die('Connexion échouée : ' . $e->getMessage());
}

// Initialisation de Twig
$loader = new FilesystemLoader(__DIR__ . '/../src/views');
$twig = new Environment($loader);

// Créer une instance de Router et lui passer Twig et PDO
$router = new Router($twig, $pdo); 

// FRONT-CONTROLLER
$router->route(); // Appelle la méthode route() pour gérer les requêtes entrantes
