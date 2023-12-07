<?php

class PersonnageManager extends DbManager implements CrudInterface
{
    public function find($id, $deep = false)
    {
        $query = $this->bdd->prepare("SELECT * FROM personnages WHERE id =:id");
        $query ->execute(["id"=>$id]);
        $resultat = $query->fetch();

        $perso =null;
        if($resultat){
            $perso = new Personnage($resultat["id"],$resultat["name"],$resultat["image"],$resultat["prime"]);
        }
        return $perso;
    }

    public function findAll()
    {
        $query = $this->bdd->query("SELECT * FROM personnages");
        $resultats = $query->fetchAll();

        $arrayPersonnage = [];
        foreach ($resultats as $resultat) {
            $arrayPersonnage[]= new Personnage($resultat["id"],$resultat["name"],$resultat["image"],$resultat["prime"]);
        }
        return $arrayPersonnage;
    }

    public function delete($personnage)
    {
        $query = $this->bdd->prepare("DELETE FROM personnages WHERE id= :id");
        $query -> execute(['id' => $personnage->getId()]);
    }

    public function modif($personnage)
    {
        $query = $this->bdd->prepare("UPDATE personnages SET name=:name,image=:image,prime=:prime WHERE id =:id");
        $query -> execute(['name' => $personnage->getName(),
                            'image'=>$personnage->getImage(),
            'prime'=>$personnage->getPrime(),
            'id'=>$personnage->getId()
            ]);
    }

    public function push($personnage)
    {
        $query = $this->bdd->prepare("INSERT INTO personnages (name,image,prime)VALUES(:name,:image,:prime)");
        $query -> execute(['name' => $personnage->getName(),
            'image'=>$personnage->getImage(),
            'prime'=>$personnage->getPrime()
        ]);
    }

}