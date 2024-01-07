<?php

class RaceController{

    private $raceManager;


    public function __construct()
    {
        $this->raceManager = new RaceManager();
    }

    public function genAleaRace(){
        $raceAlea = $this->raceManager->genRand();
        require './View/jeux/choixRace.php';
    }


}