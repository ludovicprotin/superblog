<!-- Contenu de la page -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5"> Ajouter un article</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
     <form action="article.php" method="post" enctype="multipart/form-data" id="form_article">
      <div class ="form-group">
        <label for="titre" class="col-form-label">Titre</label>
        <input type="texte" class="form-control" id="titre" name="titre" placeholder="Titre de votre article" value="" required>    
      </div>
      <div class ="form-group">
        <label for="texte" class="col-form-label">Texte</label> 
        <textarea class="form-control" id="texte" name="texte" rows="3" required></textarea>
      </div>
      <div class ="form-group">
        <div class="custom-file">
          <input type="file" id="image" name="image" class="custom-file-input">
          <label class="custom-file-label" for="image">Choisir un fichier</label>
        </div>
      </div>    
      <div class ="form-group">
        <div class="form-check">
          <label for="publie" class="form-check-label">
            <input checked class="form-check-input" name="publie" id="publie" type="checkbox" value="1">Publié
          </label> 
        </div> 
      </div>
      <button type="submit" class="btn btn-primary my-2 my-sm-2" name="submit" value="ajouter">Ajouter l'article</button> 
    </form>
  </div>
</div>