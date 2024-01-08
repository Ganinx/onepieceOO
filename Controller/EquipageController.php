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

    }


    public function prime(){
        $errors = [];

        if($_SERVER["REQUEST_METHOD"] == 'POST'){
            if (!array_key_exists('prime',$_SESSION)){
                $errors = $this->verifPrime();
                $point = 0;
                if(count($errors) == 0){

                    switch ($_POST["matiere"]) {
                        case "mathématique":
                            $point += 50;
                            break;
                        case "français":
                            $point += 30;
                            break;
                        case "histoire-géo":
                            $point += 40;
                            break;
                        case "physique-chimie":
                            $point += 60;
                            break;
                        case "technologie":
                            $point += 10;
                            break;
                        case "svt":
                            $point += 20;
                            break;
                        case "EPS":
                            $point += 35;
                            break;
                        case "anglais":
                            $point += 5;
                            break;
                        case "latin":
                            $point += 15;
                            break;
                    }

                    switch (strtolower($_POST["saison"])) {
                        case "hiver":
                            $point += 50;
                            break;
                        case "été":
                            $point += 10;
                            break;
                        case "printemps":
                            $point += 20;
                            break;
                        case "automne":
                            $point += 40;
                            break;
                    }


                    function lettreDansMot($lettre, $mot) {
                        $position = strpos($mot, $lettre);

                        if ($position === false) {
                            return 0;
                        } else {
                            return 30;
                        }
                    }
                    $motPlat = 'viande';

                    for($i=0;$i < strlen($_POST["plat"]);$i++){
                        $point += lettreDansmot($_POST["plat"][$i],$motPlat);
                    }

                    $pouvoirLuffy = 'elastique';

                    for($i=0;$i < strlen($_POST["pouvoir"]);$i++){
                        $point += lettreDansmot($_POST["pouvoir"][$i],$pouvoirLuffy);
                    }

                    function tirageAuSort() {
                        $nombreAleatoire = rand(1, 100);

                        // Assignation des pourcentages pour chaque chiffre
                        $chiffres = [
                            10000000 => 5,
                            5000000 => 10,
                            1000000 => 20,
                            100000 => 50,
                            10 => 15
                        ];

                        $limiteSuperieure = 0;
                        foreach ($chiffres as $chiffre => $pourcentage) {
                            $limiteSuperieure += $pourcentage;
                            if ($nombreAleatoire <= $limiteSuperieure) {
                                return $chiffre;
                            }
                        }return $chiffre;
                    }
                    $chiffre = tirageAuSort();

                    $primeFinal = $chiffre * $point;

                    $_SESSION["prime"] = $primeFinal;
                    $user = unserialize($_SESSION["user"]);
                    $monEquipage = new Equipage(null,$_SESSION["nom_equipage"],$_SESSION["id_bateau"],$_SESSION["id_race"],$_SESSION["id_fruit"],$user->getId(),$_SESSION["prime"]);

                    $this->equipageManager->push($monEquipage);

                    $result = $this->equipageManager->findNameEquipage($_SESSION["nom_equipage"]);

                    $this->equipageManager->pushPersonnage($_SESSION["id_personnage"],$result->getId());

                }
            }


        }

        require 'View/jeux/primeUser.php';



    }

    public function verifPrime(){
        $errors = [];

        $saison = ["hiver","été","printemps","automne"];

        if(empty($_POST["plat"])){
            $errors["plat"] = "Veuillez entrer un plat";
        }elseif (strlen($_POST["plat"]) > 20){
            $errors["plat"] = "Veuillez entrer un plat moins long";
        }
        if(empty($_POST["saison"])){
            $errors["saison"] = "Veuillez entrer une saison";
        }elseif (!in_array(strtolower($_POST["saison"]),$saison)){
            $errors["saison"] = "Veuillez entrer une saison valide";
        }

        if(empty($_POST["pouvoir"])){
            $errors["pouvoir"] = "Veuillez entrer un pouvoir";
        }elseif (strlen($_POST["pouvoir"]) > 20){
            $errors["pouvoir"] = "Veuillez entrer un pouvoir moins long";
        }
        if(empty($_POST["matiere"])){
            $errors["matiere"] = "Veuillez saisir une matiere";
        }elseif(!in_array($_POST["matiere"],Equipage::$allowedMatiere)){
            $errors["matiere"] = "Veuillez saisir une matiere valide";
        }


        return $errors;
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