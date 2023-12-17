<?php

class UserController
{

    private $userManager;


    public function __construct()
    {
        $this->userManager = new UserManager();
    }


    public function findAll(){
        $userDonnee = $this->userManager->findAll();
        require './View/User/list.php';
    }

    public function findAllDeep(){
        $userDonnee = $this->userManager->findAll($deep=true);
        require './View/User/list.php';
    }

    public function find(){
        $userDonnee =$this->userManager->find($_GET["id"],true);
        require './View/User/detail.php';
    }

}