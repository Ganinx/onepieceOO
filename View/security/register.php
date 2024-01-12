<?php
require 'View/function.php';
?>
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
    <title>S'inscrire</title>
</head>
<body>
<?php
include 'View/parts/header.php';
?>
<header class="masthead-register">
    <div class="row gx-4 gx-lg-5 p-5 mx-0 justify-content-center mb-5">
        <div class="col-lg-6 block-form">
            <form id="contactForm" method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="lastname" id="lastname" placeholder="Votre nom" class="form-control <?php displayBsClassForm($errors,"lastname") ?>"  value="<?php keepFormValue("lastname") ?>">
                    <label for="lastname">Nom</label>
                    <?php displayBsErrorForm($errors,'lastname') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="firstname" placeholder="Votre prénom" class="form-control <?php displayBsClassForm($errors,"firstname") ?>" value="<?php keepFormValue("firstname") ?>">
                    <label for="">Prénom</label>
                    <?php displayBsErrorForm($errors,'firstname') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" placeholder="Votre username" class="form-control <?php displayBsClassForm($errors,"username") ?>" value="<?php keepFormValue("username") ?>">
                    <label for="">Pseudo</label>
                    <?php displayBsErrorForm($errors,'username') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" placeholder="Votre email" class="form-control <?php displayBsClassForm($errors,"email") ?>" value="<?php keepFormValue("email") ?>">
                    <label for="">email</label>
                    <?php displayBsErrorForm($errors,'email') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" placeholder="Votre mot de passe" class="form-control <?php displayBsClassForm($errors,"password") ?>" value="<?php keepFormValue("password") ?>">
                    <label for="">Password</label>
                    <?php displayBsErrorForm($errors,'password') ?>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="confirm-password" placeholder="Confirmation mot de passe" class="form-control <?php displayBsClassForm($errors,"confirm-password") ?>" value="<?php keepFormValue("confirm-password") ?>">
                    <label for="">Confirm password</label>
                    <?php displayBsErrorForm($errors,'confirm-password') ?>
                </div>
                <div class="d-grid"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">S'inscrire</button></div>
                <a href="index.php?controller=security&action=login">Déjà un compte?</a>
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