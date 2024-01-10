<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php?controller=guest&action=page">One piece fan</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php?controller=guest&action=page">accueil</a>
                </li>
                <?php
                if(!array_key_exists('user',$_SESSION)){
                    echo('<li class="nav-item">
          <a class="nav-link" href="index.php?controller=security&action=login">connexion</a>
        </li>
<li class="nav-item">
          <a class="nav-link" href="index.php?controller=security&action=login">connexion</a>
        </li>');
                }
                else{
                    $userSession = unserialize($_SESSION['user']);
                    echo('
        <li class="nav-item">
            <a class="nav-link" href="">'.$userSession->getFirstname().' '.$userSession->getLastname().'</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?controller=jeux&choix=equipage">Créer son équipage</a>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="index.php?controller=security&action=logout">deconnexion</a>
        </li>
        ');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>