<?php

declare(strict_types=1);

namespace App\Controller;

class ContactController
{
    private $twig;

    // Ajoutez un constructeur pour injecter Twig
    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    // Méthode index pour afficher la page de contact
    public function index()
    {
        echo $this->twig->render('contact.html.twig');
    }
}
