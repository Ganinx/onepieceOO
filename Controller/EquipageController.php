<?php

class EquipageController extends SessionController
{

    private $equipageManager;


    public function __construct()
    {
        parent::__construct();
        $this->equipageManager = new EquipageManager();
    }


    public function findAll(){
        $userDonnee = $this->equipageManager->findAll();
        require './View/User/list.php';
    }

    public function findAllDeep(){
        $userDonnee = $this->equipageManager->findAll($deep=true);
        require './View/User/list.php';
    }

    public function find(){
        $userDonnee =$this->equipageManager->find($_GET["id"],true);
        $allperso = $this->equipageManager->findPersoUser($_GET["id"]);
        require './View/User/detail.php';
    }

    public function setEquipage(){
        $user = unserialize($_SESSION["user"]);
        $monEquipage = new Equipage(null,$_SESSION["nom_equipage"],$_SESSION["id_bateau"],$_SESSION["id_race"],$_SESSION["id_fruit"],$user->getId());

        $this->equipageManager->push($monEquipage);

        $result = $this->equipageManager->findNameEquipage($_SESSION["nom_equipage"]);

        $this->equipageManager->pushPersonnage($_SESSION["id_personnage"],$result->getId());
        $userDonnee = $this->equipageManager->findAll();
        require './View/User/list.php';
    }

    public function verifName()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $user = unserialize($_SESSION["user"]);

            if (empty($_POST["name-equipage"])) {
                $errors["name-equipage"] = "Il faut un nom d'équipage obligatoirement";
            }
            if ($this->equipageManager->checkName($_POST["name-equipage"])) {
                $errors["name-equipage"] = "Ce nom est déjà pris, veuillez en choisir un autre";
            }
            if ($this->equipageManager->checkId($user->getId())) {
                $errors["name-equipage"] = "Vous avez déjà un équipage !";
            }

            if (count($errors) == 0) {

                $_SESSION['nom_equipage'] = $_POST["name-equipage"];
                header('Location: index.php?controller=jeux&choix=race');

            }



        }
        require 'View/jeux/equipage.php';
    }





}