<?php
require 'CrudInterface.php';
require 'auto-loader.php';

if(empty($_GET)){
    header("Location: index.php?controller=guest&action=page");
}

if($_GET["controller"] == "user"){
    $allEquipage = new EquipageController();
    if($_GET["action"] == "list"){
        $allEquipage->findAll();
    }
    elseif($_GET["action"] == "detail"){
        $allEquipage->find();
    }else{
        require 'View/security/page404.php';
    }
}elseif($_GET["controller"] == "guest"){
    $allpersonnage = new PersonnageController();
    if($_GET["action"] == "page"){
        $allpersonnage->findAll();
    }elseif($_GET["action"] == "detail" AND array_key_exists("id",$_GET)){
        $allpersonnage->find();
    }else{
        require 'View/security/page404.php';
    }
}elseif($_GET["controller"] == "security"){
    $security = new UserController();
    if($_GET["action"] == "login"){
        $security->login();
    }elseif($_GET["action"] == "logout"){
        $security->logout();
    }elseif($_GET["action"] == "register"){
        $security->register();
    }
}elseif($_GET["controller"] == "jeux"){
$genRace = new RaceController();
$genFruit = new FruitController();
$genPerso = new PersonnageController();
$genBateau = new BateauController();

if($_GET["choix"] == "race"){
        $genRace->genAleaRace();
    }elseif ($_GET["choix"] == "fruit"){
        $genFruit->genAleaFruit();
    }elseif ($_GET["choix"] == "personnage"){
        $genPerso->genAleaPersonnage();
    }elseif ($_GET["choix"] == "bateau"){
        $genBateau->genAleaBateau();
    }
}else{
    require 'View/security/page404.php';
}




