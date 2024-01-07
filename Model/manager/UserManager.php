<?php

class UserManager extends DbManager
{


    public function findLogin()
    {
        $user =null;

        $query = $this->bdd->prepare("SELECT * FROM users WHERE username = :username OR email = :email");

        $query->execute([
            "username"=>$_POST["emailorusername"],
            "email"=>$_POST["emailorusername"]
        ]);
        $result = $query->fetch();

        if ($result){
            $user = new User($result["id"],$result["firstname"],$result["lastname"],$result["email"],$result["password"],$result["username"]);
        }

        return $user;
    }


    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    public function push($obj)
    {
        $query = $this->bdd->prepare("INSERT INTO users (firstname,lastname,email,password,username) VALUES(:firstname,:lastname,:email,:password,:username)");
        $query->execute([
            'firstname'=>$obj->getFirstname(),
            'lastname'=>$obj->getLastname(),
            'email'=>$obj->getEmail(),
            'username'=>$obj->getUserName(),
            'password'=>$obj->getPassword()]);
    }

    public function modif($obj)
    {
        // TODO: Implement modif() method.
    }




}