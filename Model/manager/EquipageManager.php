<?php

class EquipageManager extends DbManager implements CrudInterface {
    public function find($id, $deep = false)
    {
        if(!$deep){
            $query = $this->bdd->prepare("SELECT * FROM equipages WHERE id =:id");
            $query ->execute(["id"=>$id]);
            $resultat = $query->fetch();

            $equipage =null;
            if($resultat){
                $equipage = new Equipage($resultat["id"], $resultat["name_equipage"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"],$resultat['id_user']);
            }
        }else{
            $query = $this->bdd->prepare("SELECT equipages.*, b.bateau_name,b.image_bateau,f.fruit_name,f.id_type_fruit,type_name,r.nom_race,r.image_race FROM equipages JOIN fruits f on f.id = equipages.id_fruit JOIN bateaux b on b.id = equipages.id_bateau
join races r on r.id = equipages.id_race JOIN fruits_types ft ON ft.id = f.id_type_fruit WHERE equipages.id = :id");
            $query ->execute(["id"=>$id]);
            $resultat = $query->fetch();

            $equipage =null;
            if($resultat){
                $fruitType = new Fruits_types($resultat["id_type_fruit"],$resultat["type_name"]);
                $fruit = new Fruit($resultat["id_fruit"],$resultat["fruit_name"],$fruitType);
                $race = new Race($resultat["id_race"],$resultat["nom_race"],$resultat["image_race"]);
                $bateau = new Bateau($resultat["id_bateau"],$resultat["bateau_name"],$resultat['image_bateau']);
                $equipage = new Equipage($resultat["id"],$resultat["name_equipage"],$bateau,$race,$fruit,$resultat['id_user']);
            }
        }

        return $equipage;
    }

    public function findNameEquipage($nomEquipage)
    {
            $query = $this->bdd->prepare("SELECT * FROM equipages WHERE name_equipage =:name_equipage");
            $query ->execute(["name_equipage"=>$nomEquipage]);
            $resultat = $query->fetch();

            $equipage =null;
            if($resultat){
                $equipage = new Equipage($resultat["id"], $resultat["name_equipage"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"],$resultat['id_user']);
            }
        return $equipage;
        }

    public function checkName($name){
        $query = $this->bdd->prepare("SELECT COUNT(*) as count FROM equipages WHERE name_equipage = :name");
        $query->execute(['name'=>$name]);

        $result = $query->fetch();

        return $result['count'] > 0;
    }
    public function checkId($id){
        $query = $this->bdd->prepare("SELECT COUNT(*) as count FROM equipages WHERE id_user = :id_user");
        $query->execute(['id_user'=>$id]);

        $result = $query->fetch();

        return $result['count'] > 0;
    }

    public function findPersoUser($id){

        $query = $this->bdd->prepare("SELECT * FROM personnages join personnages_users pu on pu.id_personnage = personnages.id join equipages on equipages.id = pu.id_equipage WHERE equipages.id =:id");
        $query ->execute(["id"=>$id]);
        $resultats = $query->fetchAll();


        $persos = [];
        foreach ($resultats as $resultat ){
            $persos[]= new Personnage($resultat["id"],$resultat["name"],$resultat["image"],$resultat["prime"]);
        };
        return $persos;
    }

    public function findAll($deep =false)
    {
        $arrayUsers = [];
        if($deep){
            $query = $this->bdd->query("SELECT equipages.*, b.bateau_name,b.image_bateau,f.fruit_name,f.id_type_fruit,type_name,r.nom_race,r.image_race FROM equipages JOIN fruits f on f.id = equipages.id_fruit JOIN bateaux b on b.id = equipages.id_bateau
join races r on r.id = equipages.id_race JOIN fruits_types ft ON ft.id = f.id_type_fruit");
            $resultats = $query->fetchAll();


            foreach ($resultats as $resultat) {
                $fruitType = new Fruits_types($resultat["id_type_fruit"],$resultat["type_name"]);
                $fruit = new Fruit($resultat["id_fruit"],$resultat["fruit_name"],$fruitType);
                $race = new Race($resultat["id_race"],$resultat["nom_race"],$resultat["image_race"]);
                $bateau = new Bateau($resultat["id_bateau"],$resultat["bateau_name"],$resultat['image_bateau']);
                $arrayUsers[] = new Equipage($resultat["id"],$resultat["name_equipage"],$bateau,$race,$fruit,$resultat['id_user']);
            }
        }else{
            $query = $this->bdd->query("SELECT * FROM equipages");
            $resultats = $query->fetchAll();


            foreach ($resultats as $resultat) {

                $arrayUsers[] = new Equipage($resultat["id"],$resultat["name_equipage"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"],$resultat['id_user']);
            }
        }

        return $arrayUsers;
    }

    public function delete($obj)
    {
        $query = $this->bdd->prepare("DELETE FROM equipages WHERE id= :id");
        $query -> execute(['id' => $obj->getId()]);
    }

    public function push($obj)
    {
        $query = $this->bdd->prepare("INSERT INTO equipages (name_equipage,id_bateau,id_race,id_fruit,id_user)VALUES(:name_equipage,:bateau,:race,:fruit,:id_user)");
        $query -> execute(['name_equipage' => $obj->getNameEquipage(),
            'bateau'=>$obj->getIdBateau(),
            'race'=>$obj->getIdRace(),
            'fruit'=>$obj->getIdFruit(),
            'id_user'=>$obj->getIdUser()
        ]);
    }

    public function pushPersonnage($array,$id)
    {
        foreach ($array as $item){
            $query = $this->bdd->prepare("INSERT INTO personnages_users (id_personnage,id_equipage)VALUES(:id_personnage,:id_equipage)");
            $query -> execute(['id_personnage' => $item,
                'id_equipage'=>$id
            ]);
        }

    }



    public function modif($obj)
    {
        $query = $this->bdd->prepare("UPDATE equipages SET name_equipage=:name_equipage,id_bateau=:bateau,id_race=:race,id_fruit=:fruit,id_user=:id_user WHERE id =:id");
        $query -> execute(['name_equipage' => $obj->getNameEquipage(),
            'bateau'=>$obj->getIdBateau(),
            'race'=>$obj->getIdRace(),
            'id'=>$obj->getId(),
            'fruit'=>$obj->getIdFruit(),
            'id_user'=>$obj->getIdUser()
        ]);
    }


}