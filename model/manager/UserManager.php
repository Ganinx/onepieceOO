<?php

class UserManager extends DbManager implements CrudInterface {
    public function find($id, $deep = false)
    {
        $query = $this->bdd->prepare("SELECT * FROM users WHERE id =:id");
        $query ->execute(["id"=>$id]);
        $resultat = $query->fetch();

        $user =null;
        if($resultat){
            $user = new Users($resultat["firstname"],$resultat["id_bateau"],$resultat["id_race"],$resultat["id_fruit"]);
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