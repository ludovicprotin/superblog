 <!-- Menu, navigation  -->   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
          <?php 
          if(isset($_COOKIE['sid']) AND !empty($_COOKIE['sid'])){
            echo '<a class="navbar-brand" href="index.php">Bonjour '.getNomUtilisateur($bdd, $_COOKIE['sid']).'</a>';
             
          } else{
            echo '<a class="navbar-brand" href="connexion.php">Créer un compte ou connectez-vous ! ;-)</a>';
          }
        ?> 
      <form class="form-inline" method="GET">
         <input type="search" class="form-control-mr-sm-2 m-2" name="search" placeholder="Titre ou contenu" aria-label="Search">
         <button class="btn btn-success my-2 my-sm-2" type="submit">Rechercher</button>
      </form>
    <button class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarResponsive" 
            aria-controls="navbarResponsive" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?page=1">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
       <?php 
          if(isset($_COOKIE["sid"])) {
        ?>
       <li class="nav-item"> 
          <a class="nav-link" href="article.php">Article</a>
        </li>
        <!-- Vérification du cookie pour l'affichage du menu dynamique -->
        
        <li class="nav-item">
          <a href="deconnexion.php" class="nav-link">Déconnexion</a>
        </li>
        <?php 
        } else {
        ?>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Connexion</a>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">Inscription</a>
        </li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>