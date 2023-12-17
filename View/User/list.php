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



    <?php
    foreach ($userDonnee as $item) {
        echo('<div><h3 class="text-center">'.$item->getFirstname().'</h3>
               <a href="index.php?controller=user&action=detail&id='.$item->getId().'" class="btn btn-warning">voir en détail</a> </div>');
    }
    ?>
    </div>



</body>
</html>