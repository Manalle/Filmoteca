<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\FilmEntity;
use App\Repository\FilmRepository;
use App\Core\TwigEnvironment;

class FilmController
{
    public function list(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        
        $twig = TwigEnvironment::create();

        // Rendre la vue Twig
        echo $twig->render('list.html.twig', [
            'films' => $films, // On passe les films à la vue
        ]);
    }

    public function create()
    {
        echo "Création d'un film";
    }

    public function read()
    {
        echo "Lecture d'un film";
    }

    public function update()
    {
        echo "Mise à jour d'un film";
    }

    public function delete()
    {
        echo "Suppression d'un film";
    }
}