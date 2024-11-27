<?php

namespace App\Controller;

use App\Repository\FilmRepository;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class FilmController
{
    protected Environment $twig;

    // Constructeur pour initialiser Twig
    public function __construct()
    {
        // Créez un chargeur de fichiers pour Twig
        $loader = new FilesystemLoader(__DIR__ . '/../views');
        // Initialisation de l'environnement Twig
        $this->twig = new Environment($loader);
    }

    // Afficher la liste des films
    public function index()
    {
        // Créer une instance du repository pour récupérer les films
        $filmRepository = new FilmRepository();
        // Récupérer tous les films
        $films = $filmRepository->findAll();
        
        // Rendu avec Twig
        echo $this->twig->render('films.html.twig', ['films' => $films]);
    }

    // Afficher la liste des films (version alternative)
    public function list()
    {
        // Créer une instance du repository pour récupérer les films
        $filmRepository = new FilmRepository();
        // Récupérer tous les films
        $films = $filmRepository->findAll();
        
        // Rendu avec Twig
        echo $this->twig->render('films_liste.html.twig', ['films' => $films]);
    }

    // Créer un film (afficher un formulaire ou logique de création)
    public function create()
    {
        echo "Création d'un film";
    }

    // Afficher un film spécifique
    public function read(array $queryParams)
    {
        // Récupérer l'ID du film dans les paramètres de la requête
        $id = (int) $queryParams['id'];
        
        // Créer une instance du repository et récupérer le film par son ID
        $filmRepository = new FilmRepository();
        $film = $filmRepository->findById($id);
        
        // Rendu avec Twig
        echo $this->twig->render('film_details.html.twig', ['film' => $film]);
    }

    // Mettre à jour un film (logique de mise à jour)
    public function update()
    {
        echo "Mise à jour d'un film";
    }

    // Supprimer un film (logique de suppression)
    public function delete()
    {
        echo "Suppression d'un film";
    }
}
