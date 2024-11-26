<?php
namespace App\Controller;

class ContactController{
    public function list(){
        echo "Liste des contact";
    }
    public function create(){
        echo "Creation d'un contact";
    }
    public function read(){
        echo "Lire un contact";
    }
    public function update(){
        echo "Mise à jour d'un contact";
    }
    public function delete(){
        echo "Supprimer un contact";
    }
}
?>