<?php
require 'CrudInterface.php';
require 'auto-loader.php';

if(empty($_GET)){
    header("Location: index.php?controller=user&action=page");
}

if($_GET["controller"] == "user"){
    $allpersonnage = new PersonnageController();
    $allUser = new UserController();
    if($_GET["action"] == "page"){
        $allpersonnage->findAll();
    }
    if($_GET["action"] == "list"){
        $allUser->findAll();
        $allpersonnage->findPersoUser();
    }
}


