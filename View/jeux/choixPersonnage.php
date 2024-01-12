<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
    include 'View/style/style.php';
    ?>
    <title>truc</title>
</head>
<body>
<?php
include "View/parts/header.php";
?>
<header class="masthead-race">
    <div class="row gx-4 gx-lg-5 p-5 mx-0 justify-content-center mb-5">
        <div class="col-lg-3 block-form d-flex justify-content-center">
<?php
if(!isset($_SESSION['id_personnage'])) {
    $_SESSION['id_personnage'] = [];
    array_push($_SESSION['id_personnage'],$personnageEquipage->getId());
        echo('
    <div class="text-center">
        <h2 class="text-white font-weight-bold">' . $personnageEquipage->getName() . '</h2>
        <div class="img-race">
        <img src="' . $personnageEquipage->getImage() . '" class="img-fluid" alt="...">
        </div>
            <h4 class="text-white mt-2">'.number_format($personnageEquipage->getPrime(), 0, ',', ' ').' de Berrys</h4>');
        if (!empty($personnageEquipage->getDescription())) {
            echo('<p>' . $personnageEquipage->getDescription() . '</p>');
        }
        echo('<a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=personnage">vers le perso</a>
    </div>');
}elseif (count($_SESSION['id_personnage']) < 4 ){
        array_push($_SESSION['id_personnage'],$personnageEquipage->getId());
    echo('
    <div class="text-center">
        <h2 class="text-white font-weight-bold">' . $personnageEquipage->getName() . '</h2>
        <div class="img-race">
        <img src="' . $personnageEquipage->getImage() . '" class="img-fluid" alt="...">
        </div>');
        if (is_null($personnageEquipage->getPrime())){
            echo('<h4 class="text-white mt-2">pas de prime</h4>');
        }else{
            echo('<h4 class="text-white mt-2">'.number_format($personnageEquipage->getPrime(), 0, ',', ' ').' de Berrys</h4>');
        }

    if (!empty($personnageEquipage->getDescription())) {
        echo('<p>' . $personnageEquipage->getDescription() . '</p>');
    }
    echo('<a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=personnage">vers le perso</a>
    </div>');
}elseif (count($_SESSION['id_personnage']) > 4){
    echo('<a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=bateau">vers le bateau</a>
    </div>');
}
else{
    array_push($_SESSION['id_personnage'],$personnageEquipage->getId());
    echo('
    <div class="text-center">
        <h2 class="text-white font-weight-bold">' . $personnageEquipage->getName() . '</h2>
        <div class="img-race">
        <img src="' . $personnageEquipage->getImage() . '" class="img-fluid" alt="...">
        </div>
            <h4 class="text-white mt-2">'.number_format($personnageEquipage->getPrime(), 0, ',', ' ').' de Berrys</h4>');
    if (!empty($personnageEquipage->getDescription())) {
        echo('<p>' . $personnageEquipage->getDescription() . '</p>');
    }
    echo('<a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=bateau">vers le bateau</a>
    </div>');
}
?>
        </div>
    </div>
</header>


            <?php
            if(!isset($_SESSION['id_race'])){
                $_SESSION['id_race'] = $raceAlea->getId();
                echo('
    <div class="text-center">
         <h2 class="text-white font-weight-bold">'.$raceAlea->getNomRace().'</h2>
        <div class="img-race">
            <img src="'.$raceAlea->getImageRace().'" class="img-fluid" alt="...">
        </div>
            <a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=fruit">vers le fruit</a>
    </div>
      
   ');
            }else{
                echo('<a href="index.php?controller=jeux&choix=fruit">vers le fruit</a>');
            }
            ?>




</body>
</html>

