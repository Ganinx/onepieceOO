<?php

class BateauController{

    private $bateauManager;


    public function __construct()
    {
        $this->bateauManager = new BateauManager();
    }

    public function genAleaBateau(){
        $bateauAlea = $this->bateauManager->genRand();

        require './View/User/list.php';
    }


}