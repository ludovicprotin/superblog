<?php
/* Smarty version 3.1.33, created on 2019-02-13 23:07:25
  from 'C:\wamp64\www\superblog-img08022019\template\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c64a32d3e1d76_89117312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e26d6a04f2b58070b56de423c420302a28ec51cc' => 
    array (
      0 => 'C:\\wamp64\\www\\superblog-img08022019\\template\\index.tpl',
      1 => 1550099241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64a32d3e1d76_89117312 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Contenu de la page -->
<div class="container">

  <div class="row">
    <div class="col-lg-12 text-center">
      <?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['notifications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_color']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_color']->value['index'] : null)];?>
 alert-dismissible fade show mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
          <span aria-hidden="true">×</span>
        </button>
        <?php echo $_smarty_tpl->tpl_vars['notifications']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_message']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_message']->value['index'] : null)];?>
         
      </div>
      <?php }?>
      <h1 class="mt-5">Le Super Blog</h1>
      <ul class="list-unstyled">
        <li>Les derniers Post mis en ligne :</li>
      </ul>
    </div>
  </div>


  <div class="row">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabArticle']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <br>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <a href="viewArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['titre'];?>
</h5></a>
          <i><p class="card-auteur">By <?php echo getAuteur($_smarty_tpl->tpl_vars['bdd']->value,$_smarty_tpl->tpl_vars['value']->value['idUtilisateur']);?>
</p></i>
          <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['value']->value['texte'];?>
</p>
          <img class="img-fluid m-4" src="images/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
.jpg"> 

          <br />
          <!-- bouton date -->
          <a href="#" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['value']->value['date_fr'];?>
</a>
          <!-- bouton modification -->

          <?php if (isset($_smarty_tpl->tpl_vars['cookies']->value['sid'])) {?>
          <?php if (getNomUtilisateur($_smarty_tpl->tpl_vars['bdd']->value,$_smarty_tpl->tpl_vars['cookies']->value['sid']) == getAuteur($_smarty_tpl->tpl_vars['bdd']->value,$_smarty_tpl->tpl_vars['value']->value['idUtilisateur'])) {?>
          <a href="editArticle.php?idArticle=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn btn-primary">Modifier</a>
          <?php }?>
          <?php }?>
        </div>
      </div>
      <br>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div class="row">
    <!-- Pagination  -->
    <nav aria-label="Page_navigation">
      <ul class="pagination">
        <li class="page-item">
          <?php if ($_smarty_tpl->tpl_vars['pageCourante']->value > 1) {?>
          <a class="page-link " href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value-1;?>
">Previous</a>
          <?php } else { ?>
          <a class="page-link " href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
">Previous</a>
          <?php }?>
        </li>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <li class="page-item">
          <a class="page-link" href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
        </li>
        <?php }
}
?>
        <li class="page-item">
          <?php if ($_smarty_tpl->tpl_vars['pageCourante']->value < $_smarty_tpl->tpl_vars['nbPages']->value) {?>
          <a class="page-link " href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value+1;?>
">Next</a>
          <?php } else { ?>
          <a class="page-link " href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['pageCourante']->value;?>
">Next</a>
          <?php }?>
        </li>
      </ul>
    </nav>
  </div>
</div><?php }
}
