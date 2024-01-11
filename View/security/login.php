
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
    <title>connexion</title>
</head>
<body>
<?php
include 'View/parts/header.php'
?>
<header class="masthead-login">
        <div class="row gx-4 gx-lg-5 p-5 justify-content-center mb-5">
            <div class="col-lg-6 block-form">
                <form id="contactForm" method="post">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" name="emailorusername" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="emailorusername">Pseudo ou email</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="mdp" name="password" type="password" placeholder="Entrer votre mot de passe ici..."  data-sb-validations="required"></input>
                        <label for="password">Mot de passe</label>
                        <div class="invalid-feedback" data-sb-feedback="mdp:required">Un mot de passe est requis</div>
                    </div>
                    <?php
                    if($error){
                        echo('<div class="text-center text-danger mb-3">Erreur dans les identifiants</div>');
                    }
                    ?>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Se connecter</button></div>
                    <a class="" href="index.php?controller=security&action=register">Toujours pas de compte?</a>
                </form>
            </div>
        </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="../View/style/js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
