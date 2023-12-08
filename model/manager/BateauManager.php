<?php

class BateauManager extends DbManager
{

    public function genRand(){
        $query = $this->bdd -> query("SELECT * FROM bateaux ORDER BY RAND() LIMIT 1");
        $results = $query->fetch();

        $bateau = new Bateau($results["id"],$results["bateau_name"],$results["image_bateau"]);
        return $bateau;

    }
}