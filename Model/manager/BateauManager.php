<?php

class  BateauManager extends DbManager implements CrudInterface
{

    public function genRand(){
        $query = $this->bdd -> query("SELECT * FROM bateaux ORDER BY RAND() LIMIT 1");
        $results = $query->fetch();

        $bateau = new Bateau($results["id"],$results["bateau_name"],$results["image_bateau"]);
        return $bateau;

    }

    public function find($element, $deep = false)
    {
        $query = $this->bdd->prepare("SELECT * FROM bateaux WHERE id =:id");
        $query ->execute(["id"=>$id]);
        $resultat = $query->fetch();

        $perso =null;
        if($resultat){
            $perso = new Bateau($resultat["id"],$resultat["bateau_name"],$resultat["bateau_image"]);
        }
        return $perso;
    }

    public function findAll()
    {
        $query = $this->bdd->query("SELECT * FROM bateaux");
        $resultats = $query->fetchAll();

        $arrayPersonnage = [];
        foreach ($resultats as $resultat) {
            $arrayPersonnage[]= new bateau($resultat["id"],$resultat["bateau_name"],$resultat["bateau_image"]);
        }
        return $arrayPersonnage;
    }

    public function delete($obj)
    {
        $query = $this->bdd->prepare("DELETE FROM bateaux WHERE id= :id");
        $query -> execute(['id' => $obj->getId()]);
    }

    public function push($obj)
    {
        $query = $this->bdd->prepare("INSERT INTO bateaux (bateau_name,bateau_image)VALUES(:name,:image)");
        $query -> execute(['name' => $obj->getBateauName(),
            'image'=>$obj->getBateauImage(),
        ]);
    }

    public function modif($obj)
    {
        $query = $this->bdd->prepare("UPDATE bateaux SET bateau_name=:name,bateau_image=:image WHERE id =:id");
        $query -> execute(['name' => $obj->getBateauName(),
            'image'=>$obj->getBateauImage(),
            'id'=>$obj->getId()
        ]);
    }

}