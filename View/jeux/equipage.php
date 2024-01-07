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


<?php

if(!$_SERVER["REQUEST_METHOD"]== 'POST'){
    echo('<form method="post">
    <label>Choisis le nom de ton équipage</label>
    <input type="text" name="name-equipage">
</form>');
}else{
    echo('<a href="index.php?controller=jeux&choix=race">Voir à quelle race tu appartiens</a>');
}
?>







</body>
</html>