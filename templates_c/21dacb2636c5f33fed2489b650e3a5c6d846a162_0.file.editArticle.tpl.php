<?php
/* Smarty version 3.1.33, created on 2019-02-09 14:36:59
  from 'C:\wamp64\www\superblog-img08022019\template\editArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5ee58b8154b5_03619782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21dacb2636c5f33fed2489b650e3a5c6d846a162' => 
    array (
      0 => 'C:\\wamp64\\www\\superblog-img08022019\\template\\editArticle.tpl',
      1 => 1549723015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5ee58b8154b5_03619782 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contenu de la page -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5"> Modifier un article</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center">
      <form action="editArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" enctype="multipart/form-data" id="form_article">
        <div class ="form-group">
          <label for="titre" class="col-form-label">Titre</label>
          <input type="texte" class="form-control" id="titre" name="titre" placeholder="Titre de votre article" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" required>    
        </div>
        <div class ="form-group">
          <label for="texte" class="col-form-label">Texte</label> 
          <textarea class="form-control" id="texte" name="texte" rows="3" required> <?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea>
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
        <button type="submit" class="btn btn-primary" name="modifier" value="modifier"> Modifier l'article</button>
      </form>
      <a href="editArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&deleteArticle=true"><button class="btn btn-danger my-2 my-sm-2">Supprimer</button></a>
    </div>
  </div>
</div><?php }
}
