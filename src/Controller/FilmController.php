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
            // Si le formulaire a été soumis, traiter les données

            $title = $_POST['title'] ?? '';
            $year = $_POST['year'] ?? '';
            $type = $_POST['type'] ?? '';
            $director = $_POST['director'] ?? '';
            $synopsis = $_POST['synopsis'] ?? '';

            // Créer un objet Film avec les données du formulaire
            $film = new Film();
            $film->setTitle($title);
            $film->setYear($year);
            $film->setType($type);
            $film->setDirector($director);
            $film->setSynopsis($synopsis);

            // Definition  des champs 'createdAt' et 'updatedAt' à la date actuelle
            $now = new \DateTime();
            $film->setCreatedAt($now);
            $film->setUpdatedAt($now);

            // Sauvegarde du film dans la base de données
            $filmRepository = new FilmRepository();
            $filmRepository->save($film);

            // Redirection  vers la liste des films après l'ajout
            header('Location: /film/list');
            exit();
        }

        // Si ce n'est pas une requête POST, afficher le formulaire
        echo $this->renderer->render('film/create.html.twig');
    }
    

    



    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        dd($film);
    }

    public function update()
    {
        echo "Mise à jour d'un film";
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