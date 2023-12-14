<?php

class UserController
{

    private $userManager;

    /**
     * @param $userManager
     */
    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    /*public function find(){
        $userDonnee = $this->userManager->find();
    }*/

    public function findAll(){
        $userDonnee = $this->userManager->findAll();
        require './View/User/list.php';
    }

}