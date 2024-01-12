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
<header class="masthead-fruit">
    <div class="row gx-4 gx-lg-5 p-5 mx-0 justify-content-center mb-5">
        <div class="col-lg-3 block-form d-flex justify-content-center">
            <?php
if(!isset($_SESSION['id_fruit'])) {
    $_SESSION['id_fruit'] = $fruitAlea->getId();
    echo('
<div class="text-center">
            <h2 class="text-white font-weigth-bold">' . $fruitAlea->getFruitName() . '</h2>
            <h5 class="text-white">' . $fruitAlea->getIdTypeFruit()->getTypeName() . '</h5>
            <a href="index.php?controller=jeux&choix=personnage">vers les personnages</a>
</div>');
}else{
    echo('<a href="index.php?controller=jeux&choix=personnage">vers les personnages</a>');
}
?>
        </div>
    </div>
</header>







</body>
</html>
