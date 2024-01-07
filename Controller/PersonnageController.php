<?php


class PersonnageController{

    private $personnageManager;


    public function __construct()
    {
        $this->personnageManager = new PersonnageManager();
    }

    public function genAleaPersonnage(){

        $personnageEquipage = $this->personnageManager->genRand();

        require './View/jeux/choixPersonnage.php';
    }

    public function findAll(){
        $allPersonnage = $this->personnageManager->findAll();
        require './View/User/page.php';
    }

    public function find(){
        $detailPerso = $this->personnageManager->find($_GET["id"]);


        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $detailPerso->setDescription($_POST["description"]);

            $this->personnageManager->modif($detailPerso);
        }
        require './View/personnage/detailpersonnage.php';
    }



}