<?php
/* Smarty version 3.1.33, created on 2019-02-14 21:32:38
  from 'C:\wamp64\www\ProtinLudovic\template\inscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c65de76879787_02712196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40045edc382899759086d83dc7943fcc6a813542' => 
    array (
      0 => 'C:\\wamp64\\www\\ProtinLudovic\\template\\inscription.tpl',
      1 => 1549614825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65de76879787_02712196 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contenu de la page -->
<div class="container">
    <div class="row">
     <div class="col-lg-12 text-center">
         <h1 class="mt-5"> Créer votre compte</h1>
     </div>
 </div>
 <div class="row">
    <div class="col-lg-12 text-center">
        <form action="inscription.php" method="post" enctype="multipart/form-data" id="form_inscription">
            <div class ="form-group">
                <label for="nom" class="col-form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="" value="" required>    
            </div>
            <div class ="form-group">
                <label for="prenom" class="col-form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="" value="" required>    
            </div>
            <div class ="form-group">
                <label for="email" class="col-form-label">Adresse mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@gmail.com" value="" required>    
            </div>
            <div class ="form-group">
                <label for="mdp" class="col-form-label">Entrez votre mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="" value="" required>    
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="ajouter"> créer votre compte</button>
        </form>
    </div>
</div>
<?php }
}
