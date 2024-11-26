<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\FilmRepository;

class FilmController
{
    public function list(array $params)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        
    }

    public function create()
    {
        
        echo "Création d'un film";
    }

    public function read(array $params)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->getFilm((int)$params['id']);

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