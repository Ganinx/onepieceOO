<?php

class FruitController{

    private $fruitManager;


    public function __construct()
    {
        $this->fruitManager = new FruitManager();
    }

    public function genAleaFruit(){
        $fruitAlea = $this->fruitManager->genRand();
        require './View/jeux/choixFruit.php';
    }


}