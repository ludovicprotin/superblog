<?php
/* Smarty version 3.1.33, created on 2019-02-08 20:22:41
  from 'C:\wamp64\www\superblog-img08022019\template\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5de511adb5b3_70214520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ace538bf640b526fe650b8bcba3736c7e6f9de6' => 
    array (
      0 => 'C:\\wamp64\\www\\superblog-img08022019\\template\\connexion.tpl',
      1 => 1549618019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5de511adb5b3_70214520 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
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
<?php }
}
