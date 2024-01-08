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

var_dump($detailPerso->getDescription());
    echo('<h3 class="text-center">'.$detailPerso->getName().'</h3>
<div class="row justify-content-center mx-auto">
<div class="card" style="width: 18rem;">
  <img src="'.$detailPerso->getImage().'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$detailPerso->getName().'</h5>
    <h4>'.$detailPerso->getPrime().'</h4>');
    if(is_null($detailPerso->getDescription()) OR empty($detailPerso->getDescription())){
    echo('<form method="post">
<label>Ajouter une description</label>
<input type="textarea" name="description" placeholder="description...">
<input type="submit">
</form>');

}else{
echo('<p>'.htmlentities($detailPerso->getDescription()).'</p>');
    }
  echo('</div>
</div>
');



?>


</body>
</html>