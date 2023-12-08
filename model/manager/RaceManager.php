<?php

class RaceManager extends DbManager
{
    public function genRand(){
        $query = $this->bdd -> query("SELECT * FROM races ORDER BY RAND() LIMIT 1");
        $results = $query->fetch();

        $race = new Race($results["id"],$results["nom_race"],$results["image_race"]);
        return $race;

    }
}