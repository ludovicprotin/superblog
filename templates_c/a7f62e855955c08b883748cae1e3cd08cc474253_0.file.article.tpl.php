<?php
/* Smarty version 3.1.33, created on 2019-02-08 20:23:08
  from 'C:\wamp64\www\superblog-img08022019\template\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5de52c5ceec3_61261727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f62e855955c08b883748cae1e3cd08cc474253' => 
    array (
      0 => 'C:\\wamp64\\www\\superblog-img08022019\\template\\article.tpl',
      1 => 1549614787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5de52c5ceec3_61261727 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contenu de la page -->
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
</div><?php }
}
