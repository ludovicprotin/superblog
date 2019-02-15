<?php
/* Smarty version 3.1.33, created on 2019-02-08 08:39:12
  from 'C:\wamp64\www\superblog-img\template\viewArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5d4030557e24_62685180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9413e152865b5357edd62e8ce51db9258e660daf' => 
    array (
      0 => 'C:\\wamp64\\www\\superblog-img\\template\\viewArticle.tpl',
      1 => 1549614897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5d4030557e24_62685180 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contenu de la page -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h5 class="card-title m-4" ><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
			<p class="card-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
			<img class="img-fluid m-4"  src="images/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.jpg">
			<hr>
			<p>Espace commentaire: </p>
			#  #  #  #
			<hr>
			<p>Ecrire un commentaire: </p>
			<form>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" id="pseudo" placeholder="Pseudo">
					</div>
				</div>
				<div class="form-group">
					<label for="inputAddress">Commentaire</label>
					<textarea type="text" class="form-control" id="inputAddress" placeholder="Exprimez-vous!			"></textarea> 
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div><?php }
}
