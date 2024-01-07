<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?controller=guest&action=page">accueil</a>
        </li>
          <?php
          if(!array_key_exists('user',$_SESSION)){
              echo('<li class="nav-item">
          <a class="nav-link" href="index.php?controller=security&action=login">connexion</a>
        </li>');
              }
          else{
              echo('<li class="nav-item">
          <a class="nav-link" href="index.php?controller=security&action=logout">deconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?controller=jeux&choix=race">Créer son équipage</a>
        </li>');
          }
          ?>
      </ul>
    </div>
  </div>
</nav>