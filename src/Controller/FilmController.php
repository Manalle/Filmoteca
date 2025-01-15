<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\TemplateRenderer;
use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
    }

    public function list(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        /* $filmEntities = [];
        foreach ($films as $film) {
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setCreatedAt(new \DateTime($film['created_at']));
            $filmEntity->setUpdatedAt(new \DateTime($film['updated_at']));

            $filmEntities[] = $filmEntity;
        } */

        //dd($films);

        echo $this->renderer->render('film/list.html.twig', [
            'films' => $films,
        ]);

        // header('Content-Type: application/json');
        // echo json_encode($films);
    }

    public function create(array $formData = null)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           

            $title = $_POST['title'] ?? '';
            $year = $_POST['year'] ?? '';
            $type = $_POST['type'] ?? '';
            $director = $_POST['director'] ?? '';
            $synopsis = $_POST['synopsis'] ?? '';

            $film = new Film();
            $film->setTitle($title);
            $film->setYear($year);
            $film->setType($type);
            $film->setDirector($director);
            $film->setSynopsis($synopsis);

            
            $now = new \DateTime();
            $film->setCreatedAt($now);
            $film->setUpdatedAt($now);

            
            $filmRepository = new FilmRepository();
            $filmRepository->save($film);

            
            header('Location: /film/list');
            exit();
        }

        
        echo $this->renderer->render('film/create.html.twig');
    }
    



    public function read(array $queryParams)
{
    
    if (!isset($queryParams['id'])) {
        throw new \InvalidArgumentException('Un ID doit être spécifié pour afficher un film.');
    }

    $filmId = (int)$queryParams['id'];

    
    $filmRepository = new FilmRepository();
    $film = $filmRepository->find($filmId);

    if (!$film) {
        throw new \RuntimeException("Aucun film trouvée avec l'ID $filmId.");
    }

    
    echo $this->renderer->render('film/read.html.twig', [
        'film' => $film,
    ]);
}


    public function update(array $queryParams)
{
    $filmRepository = new FilmRepository();

    
    if (!isset($queryParams['id'])) {
        throw new \InvalidArgumentException('Un ID doit être spécifié pour mettre à jour un film.');
    }

    $filmId = (int) $queryParams['id'];

    
    $film = $filmRepository->find($filmId);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $title = $_POST['title'] ?? $film->getTitle();
        $year = $_POST['year'] ?? $film->getYear();
        $type = $_POST['type'] ?? $film->getType();
        $director = $_POST['director'] ?? $film->getDirector();
        $synopsis = $_POST['synopsis'] ?? $film->getSynopsis();

        
        $film->setTitle($title);
        $film->setYear($year);
        $film->setType($type);
        $film->setDirector($director);
        $film->setSynopsis($synopsis);
        $film->setUpdatedAt(new \DateTime());

        
        $filmRepository->save($film);

        
        header('Location: /film/list');
        exit();
    }

    
    echo $this->renderer->render('film/update.html.twig', [
        'film' => $film,
    ]);
}

    public function delete(array $queryParams)
{
    // on verifie si l'id est present sinon ca renvoie une exception
    if (!isset($queryParams['id'])) {
        throw new \InvalidArgumentException('Un ID doit être fourni pour supprimer un film.    ');
    }

    $filmId = (int) $queryParams['id'];


    $filmRepository = new FilmRepository();
    $filmRepository->deleteById($filmId);

    
    header('Location: /film/list');
    exit();
}

}