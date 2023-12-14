<?php

class FruitManager extends DbManager implements CrudInterface {
    public function genRand(){
            $query = $this->bdd -> query("SELECT fruits.*,ft.id as oui,type_name FROM fruits join fruits_types ft on fruits.id_type_fruit = ft.id  ORDER BY RAND() LIMIT 1");
            $results = $query->fetch();

            $types = new fruits_types($results["oui"],$results["type_name"]);
            $fruit = new Fruit($results["id"],$results["fruit_name"],$types);
            return $fruit;

        }

    public function find($element, $deep = false)
    {
        $query = $this->bdd->prepare("SELECT * FROM fruits WHERE id =:id");
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
        $query = $this->bdd->query("SELECT * FROM fruits");
        $resultats = $query->fetchAll();

        $arrayPersonnage = [];
        foreach ($resultats as $resultat) {
            $arrayPersonnage[]= new bateau($resultat["id"],$resultat["bateau_name"],$resultat["bateau_image"]);
        }
        return $arrayPersonnage;
    }

    public function delete($obj)
    {
        $query = $this->bdd->prepare("DELETE FROM fruits WHERE id= :id");
        $query -> execute(['id' => $obj->getId()]);
    }

    public function push($obj)
    {
        $query = $this->bdd->prepare("INSERT INTO fruits (fruit_name,id_type_fruit)VALUES(:name,:id_fruit)");
        $query -> execute(['name' => $obj->getFruitName(),
            'id_fruit'=>$obj->getIdTypeFruit(),
        ]);
    }

    public function modif($obj)
    {
        $query = $this->bdd->prepare("UPDATE fruits SET fruit_name=:name,id_type_fruit=:id_fruit WHERE id =:id");
        $query -> execute(['name' => $obj->getFruitName(),
            'id_fruit'=>$obj->getIdTypeFruit(),
            'id'=>$obj->getId()
        ]);
    }

}