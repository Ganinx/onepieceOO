<?php

class FruitController{

    private $fruitManager;


    public function __construct()
    {
        $this->fruitManager = new FruitManager();
    }

    public function genAleaFruit(){
        $FruitAlea = $this->fruitManager->genRand();

        require './View/User/list.php';
    }


}