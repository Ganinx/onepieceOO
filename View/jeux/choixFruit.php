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

if(!isset($_SESSION['id_fruit'])) {
    $_SESSION['id_fruit'] = $fruitAlea->getId();
    echo('
<div class="row justify-content-center mx-auto">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">' . $fruitAlea->getFruitName() . '</h5>
            <h4 class="card-title">' . $fruitAlea->getIdTypeFruit()->getTypeName() . '</h4>
            <a href="index.php?controller=jeux&choix=personnage">vers les personnages</a>
        </div>
    </div>
</div>');
}else{
    echo('<a href="index.php?controller=jeux&choix=personnage">vers les personnages</a>');
}


?>





</body>
</html>
