<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>page</title>
</head>
<body>

<div class="row justify-content-center mx-auto">

    <?php
    foreach ($allPersonnage as $item) {
        echo('<div class="card" style="width: 18rem;">
  <img src="'.$item->getImage().'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$item->getName().'</h5>
    <p class="card-text">'.$item->getPrime().'</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>');
    }
    ?>


</div>

</body>
</html>