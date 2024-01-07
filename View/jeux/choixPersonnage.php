<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>truc</title>
</head>
<body>
<?php
include "View/parts/header.php";


if(!isset($_SESSION['id_personnage'])) {
    $_SESSION['id_personnage'] = [];
    array_push($_SESSION['id_personnage'],$personnageEquipage->getId());
        echo('
<div class="row justify-content-center mx-auto">
    <div class="card" style="width: 18rem;">
        <img src="' . $personnageEquipage->getImage() . '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">' . $personnageEquipage->getName() . '</h5>
            <h4>' . $personnageEquipage->getPrime() . '</h4>');
        if (!empty($personnageEquipage->getDescription())) {
            echo('<p>' . $personnageEquipage->getDescription() . '</p>');
        }
        echo('<a href="index.php?controller=jeux&choix=personnage">vers le perso</a></div>
    </div>
</div>');

}elseif (count($_SESSION['id_personnage']) < 5 ){
        array_push($_SESSION['id_personnage'],$personnageEquipage->getId());
        echo('
<div class="row justify-content-center mx-auto">
    <div class="card" style="width: 18rem;">
        <img src="' . $personnageEquipage->getImage() . '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">' . $personnageEquipage->getName() . '</h5>
            <h4>' . $personnageEquipage->getPrime() . '</h4>');
        if (!empty($personnageEquipage->getDescription())) {
            echo('<p>' . $personnageEquipage->getDescription() . '</p>');
        }
        echo('<a href="index.php?controller=jeux&choix=personnage">vers le bateau</a></div>
    </div>
</div>');
}
else{
    echo('<a href="index.php?controller=jeux&choix=bateau">vers le bateau</a>');
}



?>





</body>
</html>

