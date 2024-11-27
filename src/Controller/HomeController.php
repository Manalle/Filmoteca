<?php

namespace App\Controller;
use Twig\Environment;

class HomeController 
{
    private $twig; // Déclarer la propriété twig

    // Ajouter un constructeur pour l'injection de dépendances
    public function __construct($twig)
    {
        $this->twig = $twig; // Initialiser la propriété avec l'instance de Twig
    }

    // Méthode index pour rendre la vue home.html.twig
    public function index()
    {
        // Utiliser $this->twig pour rendre la vue
        echo $this->twig->render('home.html.twig');
    }
}
