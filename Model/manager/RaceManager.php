<?php

class RaceManager extends DbManager implements CrudInterface
{
    public function genRand(){
        $query = $this->bdd -> query("SELECT * FROM races ORDER BY RAND() LIMIT 1");
        $results = $query->fetch();

        $race = new Race($results["id"],$results["nom_race"],$results["image_race"]);
        return $race;

    }

    public function find($element, $deep = false)
    {
        $query = $this->bdd->prepare("SELECT * FROM races WHERE id =:id");
        $query ->execute(["id"=>$id]);
        $resultat = $query->fetch();

        $perso =null;
        if($resultat){
            $perso = new Race($results["id"],$results["nom_race"],$results["image_race"]);
        }
        return $perso;
    }

    public function findAll()
    {
        $query = $this->bdd->query("SELECT * FROM races");
        $resultats = $query->fetchAll();

        $arrayPersonnage = [];
        foreach ($resultats as $resultat) {
            $arrayPersonnage[]= new Race($results["id"],$results["nom_race"],$results["image_race"]);
        }
        return $arrayPersonnage;
    }

    public function delete($obj)
    {
        $query = $this->bdd->prepare("DELETE FROM races WHERE id= :id");
        $query -> execute(['id' => $obj->getId()]);
    }

    public function push($obj)
    {
        $query = $this->bdd->prepare("INSERT INTO races (bateau_name,bateau_image)VALUES(:name,:image)");
        $query -> execute(['name' => $obj->getBateauName(),
            'image'=>$obj->getBateauImage(),
        ]);
    }

    public function modif($obj)
    {
        $query = $this->bdd->prepare("UPDATE races SET nom_race=:name ,image_race=:image WHERE id =:id");
        $query -> execute(['name' => $obj->getNomRace(),
            'image'=>$obj->getImageRace(),
            'id'=>$obj->getId()
        ]);
    }

}