<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Onepiece</title>
</head>
<body>

<?php
include "View/parts/header.php";


echo('<h3 class="text-center">'.$userDonnee->getNameEquipage().'</h3>
<div class="row justify-content-center mx-auto">
<div class="card" style="width: 18rem;">
  <img src="'.$userDonnee->getIdBateau()->getImageBateau().'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$userDonnee->getIdBateau()->getBateauName().'</h5>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="'.$userDonnee->getIdRace()->getImageRace().'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$userDonnee->getIdRace()->getNomRace().'</h5>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h4 class="card-title">'.$userDonnee->getIdFruit()->getFruitName().'</h4>
    <h5 class="card-title">'.$userDonnee->getIdFruit()->getIdTypeFruit()->getTypeName().'</h5>
  </div>
</div>
</div>
<div class="row justify-content-center mx-auto">
');

    foreach ($allperso as $item){
        echo('<div class="card" style="width: 18rem;">
  <img src="'.$item->getImage().'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$item->getName().'</h5>
    <p>'.$item->getPrime().'</p>
  </div>
</div>

');
    }echo('</div>')



?>


</body>
</html>