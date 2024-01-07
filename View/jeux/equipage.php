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
    <title>truc</title>
</head>
<body>
<?php
include "View/parts/header.php";
?>


<h1>Te voici à la page de création de ton équipage</h1>

<p>En premier lieu, choisis le nom de ton équipage, par la suite, les prochaines bouton te donnerons ta race, ton fruit du démon, ton équipage de
5 membres et pour finir ton bateau.
    Tout équipage est unique donc bonne chance futur roi des pirates !
</p>




<form method="post">
    <label>Choisis le nom de ton équipage</label>
    <input type="text" name="name-equipage" class="form-control <?php displayBsClassForm($errors,"name-equipage") ?>" value="<?php keepFormValue("name-equipage") ?>">
    <?php displayBsErrorForm($errors,'name-equipage') ?>
    <input type="submit">
</form>







</body>
</html>