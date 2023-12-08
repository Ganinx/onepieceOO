<?php

class UserManager extends DbManager implements CrudInterface {
    public function find($id, $deep = false)
    {
        if(!$deep){
            $query = $this->bdd->prepare("SELECT * FROM users WHERE id =:id");
            $query ->execute(["id"=>$id]);
            $resultat = $query->fetch();

            $user =null;
            if($resultat){
                $user = new Users($resultat["id"], $resultat["firstname"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"]);
            }
        }else{
            $query = $this->bdd->prepare("SELECT users.*, b.bateau_name,b.image_bateau,f.fruit_name,f.id_type_fruit,type_name,r.nom_race,r.image_race FROM users JOIN fruits f on f.id = users.id_fruit JOIN bateaux b on b.id = users.id_bateau
join races r on r.id = users.id_race JOIN fruits_types ft ON ft.id = f.id_type_fruit WHERE users.id = :id");
            $query ->execute(["id"=>$id]);
            $resultat = $query->fetch();

            $user =null;
            if($resultat){
                $fruitType = new fruits_types($resultat["id_type_fruit"],$resultat["type_name"]);
                $fruit = new Fruit($resultat["id_fruit"],$resultat["fruit_name"],$fruitType);
                $race = new Race($resultat["id_race"],$resultat["nom_race"],$resultat["image_race"]);
                $bateau = new Bateau($resultat["id_bateau"],$resultat["bateau_name"],$resultat['image_bateau']);
                $user = new Users($resultat["id"],$resultat["firstname"],$bateau,$race,$fruit);
            }
        }

        return $user;
    }

    public function findAll()
    {
        $query = $this->bdd->query("SELECT * FROM users");
        $resultats = $query->fetchAll();

        $arrayUsers = [];
        foreach ($resultats as $resultat) {
            $arrayUsers[]= new Users($resultat["id"],$resultat["firstname"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"]);
        }
        return $arrayUsers;
    }

    public function delete($user)
    {
        $query = $this->bdd->prepare("DELETE FROM users WHERE id= :id");
        $query -> execute(['id' => $user->getId()]);
    }

    public function push($user)
    {
        $query = $this->bdd->prepare("INSERT INTO users (firstname,id_bateau,id_race,id_fruit)VALUES(:firstname,:bateau,:race,:fruit)");
        $query -> execute(['firstname' => $user->getFirstname(),
            'bateau'=>$user->getIdBateau(),
            'race'=>$user->getIdRace(),
            'fruit'=>$user->getIdFruit()
        ]);
    }

    public function modif($user)
    {
        $query = $this->bdd->prepare("UPDATE users SET firstname=:firstname,id_bateau=:bateau,id_race=:race,id_fruit=:fruit WHERE id =:id");
        $query -> execute(['firstname' => $user->getFirstname(),
            'bateau'=>$user->getIdBateau(),
            'race'=>$user->getIdRace(),
            'id'=>$user->getId(),
            'fruit'=>$user->getIdFruit()
        ]);
    }


}