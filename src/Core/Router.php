<?php

declare(strict_types=1);

namespace App\Core;

class Router
{
    private $twig;
    private $pdo;

    // Constructeur pour injecter Twig et PDO
    public function __construct($twig, $pdo)
    {
        $this->twig = $twig;
        $this->pdo = $pdo;
    }

    public function route(): void
    {
        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Découpe l'URI pour obtenir la route et l'action
        $parts = explode('/', $uri); // Exemple : ['films', 'list']
        $route = $parts[0] ?? null;   // 'films'
        $action = $parts[1] ?? 'index'; // 'index' par défaut pour HomeController

        // Récupère les paramètres éventuels de la query string (comme ?id=12&name=Inception)
        $queryParams = $_GET;

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'films' => 'FilmController',
            'contact' => 'ContactController',
            'home' => 'HomeController',  // Ajoutez ici votre HomeController
        ];

        if (array_key_exists($route, $routes)) {
            // Crée dynamiquement le contrôleur
            $controllerName = 'App\\Controller\\' . $routes[$route];

            if (!class_exists($controllerName)) {
                echo "Controller '$controllerName' not found";
                return;
            }

            // Injection de Twig et PDO au contrôleur
            $controller = new $controllerName($this->twig, $this->pdo);

            // Vérifie si la méthode existe dans le contrôleur
            if (method_exists($controller, $action)) {
                $controller->$action($queryParams); // Appelle la méthode dynamique correspondant à l'action
            } else {
                echo "Action '$action' not found in $controllerName";
            }
        } else {
            // Page non trouvée
            echo "404 Not Found";
        }
    }
}
