<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Connexion</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
      <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion">
        <div class ="form-group">
          <label for="email" class="col-form-label">Adresse mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="" required>    
        </div>
        <div class ="form-group">
          <label for="mdp" class="col-form-label">Entrez votre mot de passe</label>
          <input type="password" class="form-control" id="mdp" name="mdp" placeholder="" value="" required>    
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="ajouter"> connexion</button>
        <br />
        <a href="inscription.php"> Vous n'avez pas de compte ?</a>
      </form>
    </div>
  </div>
</div>