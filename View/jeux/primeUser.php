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
    <title>truc</title>
</head>
<body>
<?php
include "View/parts/header.php";
?>
<header class="masthead-prime">
    <div class="row gx-4 gx-lg-5 p-5 justify-content-center mb-5">
        <div class="col-lg-6 block-form">
            <?php
if(!array_key_exists('prime',$_SESSION)){
    echo('<h4 class="text-white font-weigth-bold mb-5 text-center">Maintenant il est l\'heure de déterminer ta prime, répond honnetement au question car quoi que tu fasse, seul ta véritable prime sortira</h4>

<form method="post">
<div class="form-floating mb-3">
    <input type="text" name="plat" placeholder="plat pref" class="form-control">
    <label>Ton plat préféré</label>
</div>
<div class="form-floating mb-3">
    <input type="text" name="saison" placeholder="ta saison pref" class="form-control">
    <label>Ta saison préféré</label>
</div>
<div class="form-floating mb-3">
    <input type="text" name="pouvoir" placeholder="ton pouvoir pref" class="form-control">
    <label>Le pouvoir que tu aimerais avoir</label>
</div>  
<div class="form-floating mb-3">
    <select name="matiere" class="form-select">
    <option></option>')
    ?>
    <?php
    foreach (Equipage::$allowedMatiere as $matiere){
        echo('<option value="'.$matiere.'">'.$matiere.'</option>');
    }
    echo('</select>
<label>Ta matiere préféré quand tu étais à l\'école (avant les études sup)</label>
</div>
    <input type="submit" class="btn btn-primary" value="voir sa prime">
    
    
    

</form>');
}elseif(array_key_exists('prime',$_SESSION)){
    echo('<h2>'.$_SESSION["prime"].'</h2>
<a href="index.php?controller=user&action=list">revenir à la liste des user</a>');
}
else{
    echo('erreur');
}
    ?>

</div>
</div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="../View/style/js/scripts.js"></script>
</body>
</html>










</body>
</html>

