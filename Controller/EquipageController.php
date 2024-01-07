<?php

class EquipageController extends SessionController
{

    private $equipageManager;


    public function __construct()
    {
        parent::__construct();
        $this->equipageManager = new EquipageManager();
    }


    public function findAll(){
        $userDonnee = $this->equipageManager->findAll();
        require './View/User/list.php';
    }

    public function findAllDeep(){
        $userDonnee = $this->equipageManager->findAll($deep=true);
        require './View/User/list.php';
    }

    public function find(){
        $userDonnee =$this->equipageManager->find($_GET["id"],true);
        $allperso = $this->equipageManager->findPersoUser($_GET["id"]);
        require './View/User/detail.php';
    }






}