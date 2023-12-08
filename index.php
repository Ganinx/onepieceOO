<?php
require 'CrudInterface.php';
require 'model/manager/Dbmanager.php';
require 'model/Personnage.php';
require 'model/fruits_types.php';
require 'model/Fruit.php';
require 'model/manager/FruitManager.php';
require 'model/Race.php';
require 'model/manager/RaceManager.php';
require 'model/Bateau.php';
require 'model/manager/BateauManager.php';
require 'model/manager/UserManager.php';
require 'model/Users.php';

require 'model/manager/PersonnageManager.php';




$personnages = new PersonnageManager();





?>
  <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

    <div class="container row gap-3 justify-content-center mx-auto">
<?php

$resultats = $personnages->findPersoUser(41);
foreach ($resultats as $result){
    echo('
<div class="card border-3" style="width: 18rem;">
    <img src="'.$result->getImage().'" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">'.$result->getName().'</h5>
        <h4>'.$result->getPrime().'</h4>
    </div>
</div>
');
};
?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
    </html>



