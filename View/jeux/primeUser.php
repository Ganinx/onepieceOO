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

if($_SERVER["REQUEST_METHOD"] != 'POST'){
    echo('<h2>Maintenant il est l\'heure de déterminer ta prime, répond honnetement au question car quoi que tu fasse, seul ta véritable prime sortira</h2>

<form method="post">
    <label>Ton plat préféré</label>
    <input type="text" name="plat">
    <label>Ta saison préféré</label>
    <input type="text" name="saison">
    <label>Le pouvoir que tu aimerais avoir</label>
    <input type="text" name="pouvoir">
    <label>Ta matiere préféré quand tu étais à l\'école (avant les études sup)</label>
    <select name="matiere" class="form-select">
    <option></option>')
?>
    <?php
    foreach (Equipage::$allowedMatiere as $matiere){
        echo('<option value="'.$matiere.'">'.$matiere.'</option>');
    }
    echo('</select>
    <input type="submit" value="voir sa prime">

</form>');
}elseif(array_key_exists('prime',$_SESSION)){
    echo('<h2>'.$_SESSION["prime"].'</h2>
<a href="index.php?controller=user&action=list">revenir à la liste des user</a>');
}
else{
    echo('<h2>'.$_SESSION["prime"].'</h2>
<a href="index.php?controller=user&action=list">revenir à la liste des user</a>');

}
    ?>









</body>
</html>

