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
    echo('<a class="btn btn-primary mt-2" href="index.php?controller=jeux&choix=fruit">vers le fruit</a>');
    }
            ?>
        </div>
    </div>
</header>






<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Delomenie Valentin</div></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="../View/style/js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
