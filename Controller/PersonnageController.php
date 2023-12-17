<?php


class PersonnageController{

    private $personnageManager;


    public function __construct()
    {
        $this->personnageManager = new PersonnageManager();
    }

    public function genAleaPersonnage(){
        $FruitPersonnage = $this->personnageManager->genRand();
    }

    public function findAll(){
        $allPersonnage = $this->personnageManager->findAll();
        require './View/User/page.php';
    }

    public function findPersoUser(){
        $allperso = $this->personnageManager->findPersoUser();
    }

}