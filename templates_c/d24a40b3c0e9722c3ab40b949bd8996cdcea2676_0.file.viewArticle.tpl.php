<?php
/* Smarty version 3.1.33, created on 2019-02-14 21:20:52
  from 'C:\wamp64\www\ProtinLudovic\template\viewArticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c65dbb4be1d35_89657791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24a40b3c0e9722c3ab40b949bd8996cdcea2676' => 
    array (
      0 => 'C:\\wamp64\\www\\ProtinLudovic\\template\\viewArticle.tpl',
      1 => 1549723425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65dbb4be1d35_89657791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\ProtinLudovic\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- Contenu de la page -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h5 class="card-title m-4" ><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
			<p class="card-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
			<img class="img-fluid m-4"  src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
">
			<hr>
			<p>Espace commentaire: </p>
			<div id="coments">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coments']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
				<div class="jumbotron">
					<div class="row">
						<div class="col-lg-3" style="border-right:1px solid black;">
							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['pseudo'];?>
</p>
							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</p>
							<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['date'],'%d/%m/%Y %H:%M');?>
</p>
							<a href="viewArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['idArticle']->value;?>
&deleteComent=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><button class="btn btn-danger">Supprimer</button></a>
						</div>
						<div class="col-lg-9">
							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
						</div>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<hr>
			<p>Ecrire un commentaire: </p>
			<form id="comentForm" action="viewArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['idArticle']->value;?>
&addComent=true" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<div class="form-group col-md-6">
						<label for="pseudo">Pseudo</label>
						<input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
					</div>
				</div>
				<div class="form-group">
					<label for="coment">Commentaire</label>
					<textarea type="text" class="form-control" name="coment" id="coment" placeholder="Exprimez-vous!"></textarea> 
				</div>
				<input type="submit" name="sendComent" class="btn btn-primary" value="Publier">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-center">

		</div>
	</div>
</div><?php }
}
